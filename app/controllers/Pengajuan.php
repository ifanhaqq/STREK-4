<?php

class Pengajuan extends Controller {
    public function index()
    {
        $data['title'] = 'Menu Pengajuan';
        $data['pgjn'] = $this->model('Pengajuan_model')->getPengajuanByGrade($_SESSION['kelas']);

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('pengajuan/index', $data);
        $this->view('templates/footer');
    }

    public function tolak()
    {
        if ($this->model('Pengajuan_model')->refReq(($_POST['id'])) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'status', 'success');
            if ($_SESSION['type'] == 'admin') {
                header('Location: ' . BASEURL . '/pengajuan');
            } else if ($_SESSION['type'] == 'super') {
                header('Location: ' . BASEURL . '/request');
            }
            
        } else {
            Flasher::setFlash('gagal', 'diubah', 'status', 'danger');
            if ($_SESSION['type'] == 'admin') {
                header('Location: ' . BASEURL . '/pengajuan');
            } else if ($_SESSION['type'] == 'super') {
                header('Location: ' . BASEURL . '/request');
            }
        }
    }

    public function terima() {
        if ($this->model('Pengajuan_model')->accReq(($_POST)) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'status', 'success');
            if ($_SESSION['type'] == 'admin') {
                header('Location: ' . BASEURL . '/pengajuan');
            } else if ($_SESSION['type'] == 'super') {
                header('Location: ' . BASEURL . '/request');
            }
        } else {
            Flasher::setFlash('gagal', 'diubah', 'status', 'danger');
            if ($_SESSION['type'] == 'admin') {
                header('Location: ' . BASEURL . '/pengajuan');
            } else if ($_SESSION['type'] == 'super') {
                header('Location: ' . BASEURL . '/request');
            }
        }
    }

    public function getnisn()
    {
        echo json_encode($this->model('Pengajuan_model')->getPengajuanByIdAssoc($_POST['id']));
    }

    public function dump()
    {
        echo var_dump($_POST);
    }
}