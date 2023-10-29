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

    public function dump()
    {
        $dump['tbg'] = $this->model('Tabungan_model')->getAllTabungan();
        foreach ($dump['tbg'] as $row) {
            var_dump($row['nama']);  
        }
    }
}