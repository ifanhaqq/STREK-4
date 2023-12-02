<?php

class Registrations extends Controller {
    public function index()
    {
        $data['title'] = 'Menu Registrasi';
        $data['users'] = $this->model('User_model')->getAllUser();

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('registrations/index', $data);
        $this->view('templates/footer');

    }

    public function accountList()
    {
        $data['title'] = 'Menu Registrasi';
        $data['users'] = $this->model('User_model')->getAllUser();

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('registrations/accountlist', $data);
        $this->view('templates/footer');

    }

    public function edit() 
    {
        $data['title'] = 'Edit Akun';
        $data['users'] = $this->model('User_model')->getUserById($_SESSION['edit_akun']);

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('registrations/edit', $data);
        $this->view('templates/footer');
    }
}