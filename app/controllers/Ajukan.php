<?php

class Ajukan extends Controller {
    public function index() {
        $data['title'] = 'Menu Pengajuan';
        $data['pgjn'] = $this->model('Pengajuan_model')->getPengajuanById($_SESSION['tab_id']);

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('pengajuan/index', $data);
        $this->view('templates/footer');
    }

    public function tambahPengajuan()
    {
        if ($this->model('Pengajuan_model')->addPengajuan($_POST) > 0) {
            header('Location: ' . BASEURL . '/ajukan');
        } else {
            echo 'gagal';
        }

    }
}