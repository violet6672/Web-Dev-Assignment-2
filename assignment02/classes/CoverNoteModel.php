<?php
class CoverNoteModel extends Model
{
    public function find(string $tablename, string $id)
    {
        
    }

    public function findall(string $tablename)
    {
        
    }

    public function add(string $tablename, array $fields)
    {
            $policyNumber=$fields['pol_num'];
            $dateIssued=$fields['date_issued'];
            $dateExpired= $fields['date_expired'];
            $coverNoteImg=$fields['cover_note_img'];
           
            //add in password at some point
            $result = $this->sql->query("INSERT INTO ".$tablename." () VALUES ('$policyNumber', '$dateIssued', '$dateExpired', '$coverNoteImg')");
            if(!$result){
                die('Could not add cover note items '.$this->sql->error);
            }
    }

    public function del(string $tablename, string $id)
    {
        
    }

    public function update(string $tablename, array $fields)
    {
        
    }

    
        
}