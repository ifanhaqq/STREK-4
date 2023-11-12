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

    public function refReq($id) {
        $this->db->query('UPDATE '. $this->table . ' SET status = 0 WHERE tab_id = :id');
        $this->db->bind('id', $id);
        $this->db->execute();
        
        return $this->db->rowCount();
    }
}