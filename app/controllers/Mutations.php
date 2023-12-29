<?php

class Mutations extends Controller
{
    public function index()
    {
        $data['title'] = 'Daftar Mutasi';
        $data['mutasi'] = $this->model('Mutasi_model')->getAllMutasi();

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('mutasi/index', $data);
        $this->view('templates/footer');
    }

    public function daftarMutasi($kelas)
    {
        $data['title'] = 'Daftar Mutasi';
        $data['mutasi'] = $this->model('Mutasi_model')->getMutasiByKelas($kelas);
        $data['kelas'] = $kelas;

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('mutasi/daftarmutasi', $data);
        $this->view('templates/footer');
    }

    public function dump()
    {
        try {
            $all = $this->model('Mutasi_model')->join();
            echo var_dump($all);
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }
}