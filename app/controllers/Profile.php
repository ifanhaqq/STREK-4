<?php

class Profile extends Controller {

    public function index($name = "Kirito", $occupation = "Swordsman", $age = 23)
    {
        $data['name'] = $name;
        $data['occupation'] = $occupation;
        $data['age'] = $age;
        $data['title'] = 'Profile';
        
        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('profile/index', $data);
        $this->view('templates/footer');

    }
    public function page()
    {
        $data['title'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('templates/nav.php');
        $this->view('profile/page');
        $this->view('templates/footer');
    }
}