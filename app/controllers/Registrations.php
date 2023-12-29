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

    public function accountList($kelas = null)
    {
        $data['title'] = 'Menu Registrasi';
        $data['users'] = $this->model('User_model')->getAllUserByGrade($kelas);
        $data['heading'] = "Kelas " . $kelas;
        $data['kelas'] = $kelas;

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('registrations/accountlist', $data);
        $this->view('templates/footer');

    }

    public function guru()
    {
        $data['title'] = 'Menu Registrasi';
        $data['users'] = $this->model('User_model')->getAllUser();
        $data['heading'] = 'Guru';
        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('registrations/guru', $data);
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

    public function deleteAccount()
    {

        if($this->model('User_model')->deleteAccountById($_POST['id']) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'akun', 'success');
            if ($_SESSION['type'] == 'admin') {
                header('Location: ' . BASEURL . '/registration/guru');
            } else if ($_SESSION['type'] == 'super') {
                header('Location: ' . BASEURL . '/registrations/guru');
            }
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'akun', 'danger');
            if ($_SESSION['type'] == 'admin') {
                header('Location: ' . BASEURL . '/registration/guru');
            } else if ($_SESSION['type'] == 'super') {
                header('Location: ' . BASEURL . '/registrations/guru');
            }
        };
    }
}