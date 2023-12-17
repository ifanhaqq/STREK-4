<?php

class Master extends Controller {
    public function index()
    {
        $data['title'] = 'Dashboard Admin';
        $data['tbg'] = $this->model('Tabungan_model')->getAllTabungan();


        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('master/index', $data);
        $this->view('templates/footer');
    }

    public function tabungan($kelas)
    {
        $data['title'] = 'Dasboard Admin';
        $data['tbg'] = $this->model('Tabungan_model')->getTabunganByGrade($kelas);
        $data['kelas'] = $kelas;
        $_SESSION['temp_kelas'] = $kelas;

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('master/tabungan', $data);
        $this->view('templates/footer');
    }
}