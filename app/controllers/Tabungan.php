<?php

class Tabungan extends Controller {
    public function tambah()
    {
        if ($this->model('Tabungan_model')->tambahDataTabungan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL);
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function tambahJumlahSaldo()
    {
        if ($this->model('Tabungan_model')->tambahSaldo($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL);
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function getsaldo()
    {
        echo json_encode($this->model('Tabungan_model')->getTabunganByIdAssoc($_POST['id']));
    }
}