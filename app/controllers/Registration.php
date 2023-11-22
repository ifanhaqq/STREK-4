<?php

class Registration extends Controller {
    public function index() {
        // $data['title'] = 'Menu Registrasi';
        $data['title'] = 'Menu Registrasi';
        $data['user'] = $this->model('User_model')->getAllUserByGrade($_SESSION['kelas']);

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('registration/index', $data);
        $this->view('templates/footer');

    }

    public function dump()
    {
        $dump = $this->model('User_model')->getAllUserByGrade($_SESSION['kelas']);
        var_dump($dump);
    }
}