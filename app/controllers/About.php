<?php

class About extends Controller {

    public function index($name = "Kirito", $occupation = "Swordsman", $age = 23)
    {
        $data['name'] = $name;
        $data['occupation'] = $occupation;
        $data['age'] = $age;
        $data['title'] = 'About';
        
        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('about/index', $data);
        $this->view('templates/footer');

    }
    public function page()
    {
        $data['title'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('templates/nav.php');
        $this->view('about/page');
        $this->view('templates/footer');
    }
}