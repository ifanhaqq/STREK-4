<?php

class Tabungan_model {
    private $db;
    private $table = 'tabungan';
    public function __construct() 
    {
        $this->db = new Database;
    }

    public function getAllTabungan()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY nama ASC');
        return $this->db->resultSet();
    }

    public function getTabunganById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataTabungan($data)
    {
        $query = "INSERT INTO tabungan(nisn, nama, gender, saldo) VALUES (:nisn, :nama, :gender, 0)";

        $this->db->query($query);
        $this->db->bind('nisn', $data['nisn']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('gender', $data['gender']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tambahSaldo($data)
    {
        $tabungan = $this->getTabunganById($data['id']);
        $saldo = $tabungan->saldo + $data['saldo'];
        $query = 'UPDATE tabungan SET saldo = :saldo WHERE id = :id';
        $this->db->query($query);
        $this->db->bind('saldo', $saldo);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();

    }
}