<?php

class Master extends Controller {
    public function index()
    {
        $data['title'] = 'Dasboard Admin';
        $data['tbg'] = $this->model('Tabungan_model')->getAllTabungan();


        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('master/index', $data);
        $this->view('templates/footer');
    }

    public function tes()
    {
        echo 123;
    }
}