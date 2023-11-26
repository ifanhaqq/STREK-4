<?php

class Request extends Controller {
    public function index()
    {
        $data['title'] = 'Daftar Pengajuan';
        $data['pgjn'] = $this->model('Pengajuan_model')->getAllPengajuan();

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('pengajuan/index', $data);
        $this->view('templates/footer');
    }
}