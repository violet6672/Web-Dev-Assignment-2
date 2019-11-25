<?php

class IndexModel extends Model
{
    public function find(string $tablename, $fields)
    {
        $user_id= $fields['uname'];
        $user_password= $fields['passwd'];

        $query = "SELECT * from $tablename WHERE uname='$user_id' AND passwd='$user_password'";
        //$query = "SELECT * from $tablename WHERE uname='$id'";
        
        $result = $this->sql->query($query);
        if ($this->sql->errno) {
            echo 'SQL Error occurred: ';
            echo $this->sql->error;
            exit();
        }
        if ($result->num_rows() == 1) {
            return true;
        }
        else {
            return false;
        }
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
        
    }
}