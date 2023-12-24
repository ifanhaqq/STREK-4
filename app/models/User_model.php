<?php

class User_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function findUserByEmailOrUsername($email, $username)
    {
        $this->db->query('SELECT * FROM users WHERE username = :username OR email = :email');
        $this->db->bind(':username', $username);
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM users WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->singleAssoc();
    }

    //Login user
    public function login($nameOrEmail, $password)
    {
        $row = $this->findUserByEmailOrUsername($nameOrEmail, $nameOrEmail);

        if ($row == false)
            return false;

        if ($password == $row->password) {
            return $row;
        } else if (password_verify($password, $row->password)) {
            return $row;
        } else {
            return false;
        }
    }

    public function register($data)
    {
        $this->db->query('INSERT INTO users (name, email, foto, nip, kelas, username, password, type) 
        VALUES (:name, :email, :foto, :nip, :kelas, :username, :password, :type)');
        //Bind values
        $this->db->bind(':name', $data['nama']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':foto', $data['foto']);
        $this->db->bind(':nip', $data['nip']);
        $this->db->bind(':kelas', $data['kelas']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':type', $data['type']);

        //Execute
        try {
            $this->db->execute();
            return $this->db->rowCount();
        } catch(Exception) {
            return 0;
        }
    }

    public function updateAccount($data)
    {
        $this->db->query('UPDATE users SET name = :name, foto = :foto, email = :email, username = :username,
                          nip = :nip, kelas = :kelas, password= :password WHERE id = :id');
        
        $this->db->bind(':name', $data['nama']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':foto', $data['foto']);
        $this->db->bind(':nip', $data['nip']);
        $this->db->bind(':kelas', $data['kelas']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':id', $data['id']);

        try {
            $this->db->execute();
            return $this->db->rowCount();
        } catch(Exception) {
            return 0;
        }
    }

    public function getAllUserByGrade($kelas)
    {
        $type = 'user';

        $query = 'SELECT * FROM users WHERE kelas = :kelas AND type = :type';
        $this->db->query($query);
        $this->db->bind('kelas', $kelas);
        $this->db->bind('type', $type);

        return $this->db->resultSet();
    }

    public function getAllUser()
    {
        $this->db->query('SELECT * FROM users ORDER BY type DESC, kelas, name');
        return $this->db->resultSet();
    }

    public function deleteAccountById($id)
    {
        $this->db->query('DELETE FROM users WHERE id = :id');
        $this->db->bind('id', $id);

        try {
            $this->db->execute();
            return $this->db->rowCount();
        } catch(Exception) {
            return 0;
        }
    }

}