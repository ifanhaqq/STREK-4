<?php

class Mutasi extends Controller {
    public function index()
    {
        $data['title'] = 'Mutasi';
        $data['mutasi'] = $this->model('Mutasi_model')->getMutasiById($_SESSION['tab_id']);

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('mutasi/index', $data);
        $this->view('templates/footer');
    }
}