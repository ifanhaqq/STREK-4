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
            header('Location: ' . BASEURL . '/pengajuan');
        } else {
            Flasher::setFlash('gagal', 'diubah', 'status', 'danger');
            header('Location: ' . BASEURL . '/pengajuan');
        }
    }

    public function terima() {
        if ($this->model('Pengajuan_model')->accReq(($_POST)) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'status', 'success');
            header('Location: ' . BASEURL . '/pengajuan');
        } else {
            Flasher::setFlash('gagal', 'diubah', 'status', 'danger');
            header('Location: ' . BASEURL . '/pengajuan');
        }
    }

    public function gettabid()
    {
        echo json_encode($this->model('Pengajuan_model')->getPengajuanByIdAssoc($_POST['id']));
    }
}