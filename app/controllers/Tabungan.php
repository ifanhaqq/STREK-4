<?php

class Tabungan extends Controller {
    public function tambah()
    {
        if ($this->model('Tabungan_model')->tambahDataTabungan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'tabungan', 'success');
            header('Location: ' . BASEURL);
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'tabungan', 'danger');
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function tambahJumlahSaldo()
    {
        if ($this->model('Tabungan_model')->addSaldo($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'tabungan', 'success');
            header('Location: ' . BASEURL);
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'tabungan', 'danger');
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function getsaldo()
    {
        echo json_encode($this->model('Tabungan_model')->getTabunganByIdAssoc($_POST['id']));
    }
}