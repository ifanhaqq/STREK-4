<?php

class Registration extends Controller {
    public function index() {
        $data['title'] = 'Menu Registrasi';

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('registration/index');
        $this->view('templates/footer');

    }
}