<?php

class Pengajuan extends Controller {
    public function index()
    {
        $data['title'] = 'Menu Pengajuan';
        $data['pgjn'] = $this->model('Pengajuan_model')->getAllPengajuan();

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('pengajuan/index', $data);
        $this->view('templates/footer');
    }
}