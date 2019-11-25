<?php

class AdminModel extends Model
{
    public function find(string $tablename, $fields)
    {
        $employee_id= $fields['empid'];
        $employee_password= $fields['passwd'];

        $query = "SELECT * from $tablename WHERE empid='$employee_id' AND passwd='$employee_password'";
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