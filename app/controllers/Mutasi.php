<?php

class Mutasi extends Controller {
    public function index()
    {
        $data['title'] = 'Mutasi';
        $data['mutasi'] = $this->model('Mutasi_model')->getMutasiByNisn($_SESSION['nip']);

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('mutasi/index', $data);
        $this->view('templates/footer');
    }

    public function dump()
    {
        echo var_dump($this->model('Mutasi_model')->join());
    }
}