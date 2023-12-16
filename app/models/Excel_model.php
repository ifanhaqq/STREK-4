<?php 

class Excel_model
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function upload($nama, $nisn, $gender, $kelas)
    {
        $this->db->query('INSERT INTO tabungan(nama, nisn, kelas, gender, saldo) VALUES (:nama, :nisn, :kelas, :gender, 0)');
        
        $this->db->bind('nama', $nama);
        $this->db->bind('kelas', $kelas);
        $this->db->bind('nisn', $nisn);
        $this->db->bind('gender', $gender);

        try {
            $this->db->execute();
            return $this->db->rowCount();
        } catch(Exception) {
            return 0;
        }
    }
}