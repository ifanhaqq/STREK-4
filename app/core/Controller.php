<?php

class Controller {
    public function view($view, $data = [])
    {
        //different part
        error_reporting(0);
        if (!isset($_SESSION['nama'])) {
            session_start();
            $view = 'login';
            require_once '../app/views/login/index.php';
        } else {
        require_once '../app/views/' . $view . '.php';
        }
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}