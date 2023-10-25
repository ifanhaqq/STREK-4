<?php

class Profile extends Controller {

    public function index()
    {
        $data['title'] = 'Profil';
        
        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('profile/index');
        $this->view('templates/footer');

    }
}