<?php

class Pengajuan extends Controller {
    public function index()
    {
        $data['title'] = 'Menu Pengajuan';
        $data['pgjn'] = $this->model('Pengajuan_model')->getAllPengajuan();

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('pengajuan/index', $data);
        $this->view('templates/footer');
    }

    public function tolak()
    {
        if ($this->model('Pengajuan_model')->refReq(($_POST)) > 0) {
            header('Location: ' . BASEURL . '/pengajuan');
        } else {
            echo 'gagal';
        }
    }

    public function gettabid()
    {
        echo json_encode($this->model('Pengajuan_model')->getPengajuanById($_POST['id']));
    }
}