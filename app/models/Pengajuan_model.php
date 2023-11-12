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