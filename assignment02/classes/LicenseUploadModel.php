<?php
 
class LicenseModel extends Model
{
    public function find(string $tablename, string $license, string $image)
    {
       
    }
 
    public function findall(string $tablename)
    {
       
    }
 
    public function add(string $tablename, array $fields)
    {
     
    }
 
    public function del(string $tablename, string $id)
    {
       
    }
 
    public function update(string $tablename, array $fields)
    {  
        try {
   
            // Undefined | Multiple Files | $_FILES Corruption Attack
            // If this request falls under any of them, treat it invalid.
            if (!isset($_FILES['licImage']['error']) || is_array($_FILES['licImage']['error'])
            ) {
                throw new RuntimeException('Invalid parameters.');
            }
       
            // Check $_FILES['driveImage']['error'] value.
            switch ($_FILES['licImage']['error']) {
                case UPLOAD_ERR_OK:
                    break;
                case UPLOAD_ERR_NO_FILE:
                    throw new RuntimeException('No file sent.');
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                    throw new RuntimeException('Exceeded filesize limit.');
                default:
                    throw new RuntimeException('Unknown errors.');
            }
       
            // You should also check filesize here.
            if ($_FILES['licImage']['size'] > 1000000) {
                throw new RuntimeException('Exceeded filesize limit.');
            }
       
            $finfo = new finfo(FILEINFO_MIME_TYPE);
            if (false === $ext = array_search(
                $finfo->file($_FILES['licImage']['tmp_name']),
                array(
                    'jpg' => 'image/jpeg',
                    'png' => 'image/png',
                    'gif' => 'image/gif',
                ),
                true
            )) {
                throw new RuntimeException('Invalid file format.');
            }
       
            if (!move_uploaded_file(
                $_FILES['licImage']['tmp_name'],
                sprintf('./uploads/%s.%s',sha1_file($_FILES['licImage']['tmp_name']), $ext))) 
                {
                    throw new RuntimeException('Failed to move uploaded file.');
            } else{
                 //Sending info to database
                $query = "UPDATE `citizen` SET `license_image_file`='" . $_FILES['licImage']['name'] . "' WHERE `License_No`='" . $fields['lic_no'] . "'";
               
                $result = $this->sql->query($query);
 
                if ($this->sql->errno) {
                    echo 'SQL Error occurred: ';
                    echo $this->sql->error;
                    exit();
                }
 
                //Works
                if ($result) {
                    return true;
                }
                else {
                    //Nothing was found
                    $this->setErrors('licImage', 'License not found');
                    return false;
                }
            }      
        } catch (RuntimeException $e) {
       
            echo $e->getMessage();
       
        }
       
    }
}