<?php

class Request extends Controller {
    public function index()
    {
        $data['title'] = 'Daftar Pengajuan';
        

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('pengajuan/index', $data);
        $this->view('templates/footer');
    }

    public function daftarPengajuan($kelas = null)
    {
        $data['title'] = "Daftar Pengajuan Kelas $kelas";
        $data['pgjn'] = $this->model('Pengajuan_model')->getPengajuanByGrade($kelas);
        $data['kelas'] = $kelas;

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('pengajuan/daftarpengajuan', $data);
        $this->view('templates/footer');
    }
}