<?php

class Home extends Controller {
    public function index()
    {
        $data['title'] = 'Home';
        $data['tbg'] = $this->model('Tabungan_model')->getAllTabungan();

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}