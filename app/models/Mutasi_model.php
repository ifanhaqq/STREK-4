<?php

class Mutasi_model {
    private $db;
    
    private $table = "mutasi";

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllMutasi()
    {
        $query = 'SELECT n.tanggal, n.jumlah, n.nisn, m.nama FROM mutasi n INNER JOIN tabungan m ON n.nisn=m.nisn';
        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function getMutasiByNisn($nisn)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nisn = :nisn ORDER BY tanggal DESC');
        $this->db->bind('nisn', $nisn);
        return $this->db->resultSet();
    }

    public function getMutasiByKelas($kelas)
    {
        $query = 'SELECT n.tanggal, n.jumlah, n.nisn, m.nama FROM mutasi n INNER JOIN tabungan m ON n.nisn=m.nisn WHERE m.kelas = :kelas';
        $this->db->query($query);
        $this->db->bind('kelas', $kelas);
        return $this->db->resultSet();
        
    }

    public function join()
    {
        $query = 'SELECT n.tanggal, n.jumlah, n.nisn, m.nama FROM mutasi n INNER JOIN tabungan m ON n.nisn=m.nisn WHERE m.kelas = 2';
        $this->db->query($query);
        return $this->db->resultSet();
    }
}