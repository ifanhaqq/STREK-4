<?php

class Mutasi_model {
    private $db;
    
    private $table = "mutasi";

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllMutasi()
    {
        $this->db->query('SELECT * FROM mutasi');
        return $this->db->resultSet();
    }
    public function getMutasiByNisn($nisn)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nisn = :nisn ORDER BY tanggal DESC');
        $this->db->bind('nisn', $nisn);
        return $this->db->resultSet();
    }
}