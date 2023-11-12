<?php

class Pengajuan_model {
    private $db;
    private $table = "pengajuan";

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllPengajuan()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY nama ASC');
        return $this->db->resultSet();
    }

    public function getPengajuanById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE tab_id = :id');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function getPengajuanByIdAssoc($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE tab_id = :id');
        $this->db->bind('id', $id);
        return $this->db->singleAssoc();
    }

    public function addPengajuan($data)
    {
        $neutral = '1';
        $this->db->query('INSERT INTO pengajuan(nama, kelas, saldo, alasan, status, tab_id) 
                        VALUES (:nama, :kelas, :saldo, :alasan, :status, :tab_id)');
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('saldo', $data['saldo']);
        $this->db->bind('alasan', $data['alasan']);
        $this->db->bind('tab_id', $data['tabid']);
        $this->db->bind('status', $neutral);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function refReq($id) {
        $refuse = '0';
        $this->db->query('UPDATE pengajuan SET status = :refuse WHERE tab_id = :id');
        $this->db->bind('id', $id);
        $this->db->bind('refuse', $refuse);
        $this->db->execute();
        
        return $this->db->rowCount();
    }

    public function accReq($data) {
        $accept = '2';
        $this->db->query('CALL accPengajuan(:tabid, :nilai, :accept)');
        $this->db->bind('tabid', $data['tabid']);
        $this->db->bind('nilai', $data['nilai']);
        $this->db->bind('accept', $accept);
        $this->db->execute();
        
        return $this->db->rowCount();
    }
}