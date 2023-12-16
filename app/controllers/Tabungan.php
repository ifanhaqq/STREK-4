<?php

class Tabungan extends Controller {

    public function index()
    {
        $data['title'] = 'Daftar Tabungan';
        $data['tbg'] = $this->model('Tabungan_model')->getTabunganByGrade($_SESSION['kelas']);

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('tabungan/index', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if ($this->model('Tabungan_model')->tambahDataTabungan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'tabungan', 'success');
            if ($_SESSION['type'] == 'admin') {
                header('Location: ' . BASEURL . '/tabungan');
                exit;
            } else if ($_SESSION['type'] = 'super') {
                header('Location: ' . BASEURL);
                exit;
            }
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'tabungan', 'danger');
            if ($_SESSION['type'] == 'admin') {
                header('Location: ' . BASEURL . '/tabungan');
                exit;
            } else if ($_SESSION['type'] = 'super') {
                header('Location: ' . BASEURL);
                exit;
            }
        }
    }

    public function tambahJumlahSaldo()
    {
        if ($this->model('Tabungan_model')->addSaldo($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'tabungan', 'success');
            if ($_SESSION['type'] == 'admin') {
                header('Location: ' . BASEURL . '/tabungan');
                exit;
            } else if ($_SESSION['type'] = 'super') {
                header('Location: ' . BASEURL);
                exit;
            }
        } else {
            Flasher::setFlash('gagal', 'diubah', 'tabungan', 'primary');
            if ($_SESSION['type'] == 'admin') {
                header('Location: ' . BASEURL . '/tabungan');
                exit;
            } else if ($_SESSION['type'] = 'super') {
                header('Location: ' . BASEURL);
                exit;
            }
            
        }
    }

    public function delete()
    {
        if ($this->model('Tabungan_model')->deleteTabungan($_POST['id_hapus']) > 0) {
            Flasher::setLoginFlash('success', 'Data tabungan', 'berhasil dihapus');
            if ($_SESSION['type'] == 'admin') {
                header('Location: ' . BASEURL . '/tabungan');
            } else if ($_SESSION['type'] == 'super') {
                header('Location: ' . BASEURL);
            }
        } else {
            Flasher::setLoginFlash('danger', 'Data tabungan', 'gagal dihapus');
            if ($_SESSION['type'] == 'admin') {
                header('Location: ' . BASEURL . '/tabungan');
            } else if ($_SESSION['type'] == 'super') {
                header('Location: ' . BASEURL);
            }
        }
    }

    public function getsaldo()
    {
        echo json_encode($this->model('Tabungan_model')->getTabunganByIdAssoci($_POST['id']));
    }

    public function dump()
    {
        echo var_dump($_POST);
    }
}