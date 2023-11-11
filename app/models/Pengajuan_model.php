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
}