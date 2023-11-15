<?php

class Tabungan extends Controller {

    public function index()
    {
        $data['title'] = 'Daftar Tabungan';
        $data['tbg'] = $this->model('Tabungan_model')->getAllTabungan();

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('tabungan/index', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if ($this->model('Tabungan_model')->tambahDataTabungan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'tabungan', 'success');
            header('Location: ' . BASEURL . '/tabungan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'tabungan', 'danger');
            header('Location: ' . BASEURL . '/tabungan');
            exit;
        }
    }

    public function tambahJumlahSaldo()
    {
        if ($this->model('Tabungan_model')->addSaldo($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'tabungan', 'success');
            header('Location: ' . BASEURL . '/tabungan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'tabungan', 'danger');
            header('Location: ' . BASEURL . '/tabungan');
            exit;
        }
    }

    public function getsaldo()
    {
        echo json_encode($this->model('Tabungan_model')->getTabunganByIdAssoc($_POST['id']));
    }
}