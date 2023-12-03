<?php

class Registration extends Controller {
    public function index()
    {
        $data['title'] = 'Menu Registrasi';

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('registration/index', $data);
        $this->view('templates/footer');

    }

    public function accountList()
    {
        $data['title'] = 'Menu Registrasi';
        $data['users'] = $this->model('User_model')->getAllUserByGrade($_SESSION['kelas']);

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('registration/accountlist', $data);
        $this->view('templates/footer');

    }

    public function edit() 
    {
        $data['title'] = 'Edit Akun';
        $data['users'] = $this->model('User_model')->getUserById($_SESSION['edit_akun']);

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('registration/edit', $data);
        $this->view('templates/footer');
    }

    public function dump()
    {
        $dump = $this->model('User_model')->getAllUserByGrade($_SESSION['kelas']);
        var_dump($dump);
    }
}