<?php

class Pengajuan_model {
    private $db;
    private $table = "pengajuan";

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllPengajuan()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY kelas ASC, nama');
        return $this->db->resultSet();
    }

    public function getPengajuanByGrade($kelas)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE kelas = :kelas ORDER BY nama ASC');
        $this->db->bind('kelas' , $kelas);
        return $this->db->resultSet();
    }

    public function getPengajuanById($nisn)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nisn = :nisn');
        $this->db->bind('nisn', $nisn);
        return $this->db->resultSet();
    }

    public function getPengajuanByIdAssoc($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->singleAssoc();
    }

    public function addPengajuan($data)
    {
        $neutral = '1';
        $this->db->query('INSERT INTO pengajuan(nama, kelas, saldo, alasan, status, nisn) 
                        VALUES (:nama, :kelas, :saldo, :alasan, :status, :nisn)');
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('saldo', $data['saldo']);
        $this->db->bind('alasan', $data['alasan']);
        $this->db->bind('nisn', $data['nisn']);
        $this->db->bind('status', $neutral);
        
        try {
            $this->db->execute();
            return $this->db->rowCount();
        } catch(Exception) {
            return 0;
        }
    }

    public function refReq($id) {
        $refuse = '0';
        $this->db->query('UPDATE pengajuan SET status = :refuse WHERE id = :id');
        $this->db->bind('id', $id);
        $this->db->bind('refuse', $refuse);

        try {
            $this->db->execute();
            return $this->db->rowCount();
        } catch(Exception) {
            return 0;
        }
    }

    public function accReq($data) {
        $accept = '2';
        $this->db->query('CALL accPengajuan(:nisn, :nilai, :accept, :id)');
        $this->db->bind('nisn', $data['nisn']);
        $this->db->bind('nilai', $data['nilai']);
        $this->db->bind('id', $data['id']);
        $this->db->bind('accept', $accept);

        try {
            $this->db->execute();
            return $this->db->rowCount();
        } catch(Exception) {
            return 0;
        }
    }
}