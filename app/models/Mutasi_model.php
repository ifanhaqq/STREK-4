<?php

class Mutasi_model {
    private $db;
    
    private $table = "mutasi";

    public function __construct() {
        $this->db = new Database;
    }

    public function getMutasiById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE tab_id = :id ORDER BY tanggal DESC');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }
}