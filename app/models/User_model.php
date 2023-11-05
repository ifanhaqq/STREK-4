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
        } else if (password_verify($password, $row->password)){
            return $row;
        }
        else{
            return false;
        }
    }

    public function register($data)
    {
        $this->db->query('INSERT INTO adminusers (name, email, nip, kelas, username, password) 
        VALUES (:name, :email, :nip, :kelas, :username, :password)');
        //Bind values
        $this->db->bind(':name', $data['nama']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':nip', $data['nip']);
        $this->db->bind(':kelas', $data['kelas']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password', $data['password']);

        //Execute
        $this->db->execute();

        return $this->db->rowCount();
    }

}