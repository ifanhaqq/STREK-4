<?php

class Mutations extends Controller {
    public function index()
    {
        $data['title'] = 'Daftar Mutasi';
        $data['mutasi'] = $this->model('Mutasi_model')->getAllMutasi();

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('mutasi/index', $data);
        $this->view('templates/footer');
    }
}