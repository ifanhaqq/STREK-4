<?php

class Mutasi extends Controller {
    public function index()
    {
        $data['title'] = 'Mutasi';

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('mutasi/index', $data);
        $this->view('templates/footer');
    }
}