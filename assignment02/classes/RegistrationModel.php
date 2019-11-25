<?php
class RegistrationModel extends Model
{
    public function find(string $tablename, string $id)
    {
        
    }

    public function findall(string $tablename)
    {
        
    }

    public function add(string $tablename, array $fields)
    {
            $nationalID=$fields['id'];
            $license=$fields['lic_no'];
            $firstname= $fields['fname'];
            $lastname=$fields['lname'];
            $emailAddr=$fields['email'];
            $phone= $fields['telephone']. "-".$fields['telephone2'];
            $address1 = $fields['addr1'];
            $address2 = $fields['addr2'];
            $parishStuff = $fields['parish'];

            function randomLetters() {
                $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890123456789123456789';
                $letters = array(); //remember to declare $pass as an array
                $rand= rand(8,16);
                $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
                for ($i = 0; $i < $rand; $i++) {
                    $n = rand(0, $alphaLength);
                    $letters[] = $alphabet[$n];
                }
                return implode($letters); //turn the array into a string
            }

            $password_= randomLetters();

            //add in password at some point
            $result = $this->sql->query("INSERT INTO ".$tablename." (National_ID, License_No, Firstname, Lastname, Email, Telephone, Address1, Address2, Parish, Password_) VALUES ('$nationalID', '$license', '$firstname', '$lastname', '$emailAddr', '$phone', '$address1', '$address2', '$parishStuff', '$password_')");
            if(!$result){
                die('Could not add citizen '.$this->sql->error);
            }
    }

    public function del(string $tablename, string $id)
    {
        
    }

    public function update(string $tablename, array $fields)
    {
        
    }

    
        
}