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
    public function getTabunganByGrade($kelas)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE kelas = :kelas ORDER BY nama ASC');
        $this->db->bind('kelas', $kelas);
        return $this->db->resultSet();
    }

    public function getTabunganById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getTabunganByIdAssoc($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nisn =:id');
        $this->db->bind('id', $id);
        return $this->db->singleAssoc();
    }

    public function getTabunganByIdAssoci($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id =:id');
        $this->db->bind('id', $id);
        return $this->db->singleAssoc();
    }

    public function tambahDataTabungan($data)
    {
        $query = "INSERT INTO tabungan(nisn, nama, kelas, gender, saldo) VALUES (:nisn, :nama, :kelas, :gender, 0)";

        $this->db->query($query);
        $this->db->bind('nisn', $data['nisn']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('gender', $data['gender']);
        $this->db->bind('kelas', $data['kelas']);

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

    public function addSaldo($data)
    {
        $query = 'CALL addSaldo(:id, :saldo, :tanggal)';
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('saldo', $data['saldo']);
        $this->db->bind('tanggal', $data['tanggal']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}