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
}