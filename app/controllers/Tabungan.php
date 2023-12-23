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
    public function tambah($kelas)
    {
        $_SESSION['temp_kelas'] = $kelas;

        if ($this->model('Tabungan_model')->tambahDataTabungan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'tabungan', 'success');
            if ($_SESSION['type'] == 'admin') {
                header('Location: ' . BASEURL . '/tabungan');
                exit;
            } else if ($_SESSION['type'] = 'super') {
                header('Location: ' . BASEURL . '/master/tabungan/' . $_SESSION['temp_kelas']);
                unset($_SESSION['temp_kelas']);
                exit;
            }
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'tabungan', 'danger');
            if ($_SESSION['type'] == 'admin') {
                header('Location: ' . BASEURL . '/tabungan');
                exit;
            } else if ($_SESSION['type'] == 'super') {
                header('Location: ' . BASEURL . '/master/tabungan/' . $_SESSION['temp_kelas']);
                unset($_SESSION['temp_kelas']);
                exit;
            }
        }
    }

    public function tambahJumlahSaldo($kelas)
    {
        $_SESSION['temp_kelas'] = $kelas;

        if ($this->model('Tabungan_model')->addSaldo($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'tabungan', 'success');
            if ($_SESSION['type'] == 'admin') {
                header('Location: ' . BASEURL . '/tabungan');
                exit;
            } else if ($_SESSION['type'] = 'super') {
                header('Location: ' . BASEURL . '/master/tabungan/' . $_SESSION['temp_kelas']);
                unset($_SESSION['temp_kelas']);
                exit;
            }
        } else {
            Flasher::setFlash('gagal', 'diubah', 'tabungan', 'primary');
            if ($_SESSION['type'] == 'admin') {
                header('Location: ' . BASEURL . '/tabungan');
                exit;
            } else if ($_SESSION['type'] = 'super') {
                header('Location: ' . BASEURL . '/master/tabungan/' . $_SESSION['temp_kelas']);
                unset($_SESSION['temp_kelas']);
                exit;
            }
            
        }
    }

    public function delete($kelas)
    {
        $_SESSION['temp_kelas'] = $kelas;

        if ($this->model('Tabungan_model')->deleteTabungan($_POST['id_hapus']) > 0) {
            Flasher::setLoginFlash('success', 'Data tabungan', 'berhasil dihapus');
            if ($_SESSION['type'] == 'admin') {
                header('Location: ' . BASEURL . '/tabungan');
            } else if ($_SESSION['type'] == 'super') {
                header('Location: ' . BASEURL . '/master/tabungan/' . $_SESSION['temp_kelas']);
                unset($_SESSION['temp_kelas']);
            }
        } else {
            Flasher::setLoginFlash('danger', 'Data tabungan', 'gagal dihapus');
            if ($_SESSION['type'] == 'admin') {
                header('Location: ' . BASEURL . '/tabungan');
            } else if ($_SESSION['type'] == 'super') {
                header('Location: ' . BASEURL . '/master/tabungan/' . $_SESSION['temp_kelas']);
                unset($_SESSION['temp_kelas']);
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