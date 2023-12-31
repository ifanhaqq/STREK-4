<?php

class Tabungan_model
{
    private $db;
    private $table = 'tabungan';
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllTabungan()
    {
        $this->db->query('SELECT * FROM tabungan ORDER BY kelas ASC, nama');
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
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nisn =:id');
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

        try {
            $this->db->execute();
            return $this->db->rowCount();
        } catch (Exception) {
            return 0;
        }



    }

    public function addSaldo($data)
    {
        $query = 'CALL addSaldo(:id, :saldo, :tanggal, :nisn)';
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('saldo', $data['saldo']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('nisn', $data['nis']);
        
        $this->db->execute();
        return $this->db->rowCount();
        // try {

        // } catch(Exception) {
        //     return 0;
        // }
    }

    public function deleteTabungan($id)
    {
        $this->db->query('DELETE FROM tabungan WHERE id = :id');
        $this->db->bind('id', $id);

        try {
            $this->db->execute();
            return $this->db->rowCount();
        } catch (Exception) {
            return 0;
        }
    }
}