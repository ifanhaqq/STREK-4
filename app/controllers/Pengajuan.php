<?php

class Pengajuan extends Controller {
    public function index()
    {
        $data['title'] = 'Menu Pengajuan';
        $data['nama'] = $this->model('User_model')->getUser();

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('pengajuan/index', $data);
        $this->view('templates/footer');
    }
}