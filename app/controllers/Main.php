<?php

class Main extends Controller {
    public function index()
    {
        $data['title'] = 'Home';
        $data['tbg'] = $this->model('Tabungan_model')->getTabunganByIdAssoc($_SESSION['nip']);

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('main/index', $data);
        $this->view('templates/footer');
    }

    public function dump()
    {
        echo $_SESSION['nip'];
    }
}