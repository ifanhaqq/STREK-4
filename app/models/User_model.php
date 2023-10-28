<?php

class User_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function findUserByEmailOrUsername($email, $username){
        $this->db->query('SELECT * FROM adminusers WHERE username = :username OR email = :email');
        $this->db->bind(':username', $username);
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        //Check row
        if($this->db->rowCount() > 0){
            return $row;
        }else{
            return false;
        }
    }

    //Login user
    public function login($nameOrEmail, $password){
        $row = $this->findUserByEmailOrUsername($nameOrEmail, $nameOrEmail);

        if($row == false) return false;

        if($password == $row->password){
            return $row;
        }else{
            return false;
        }
    }

}