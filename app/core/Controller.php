<?php

class Controller {
    public function view($view, $data = [])
    {
        error_reporting(0);
        if (!isset($_SESSION['id'])) {
            session_start();
            $view = 'login';
            require_once '../app/views/login/index.php';
        } else {
            if ($_SESSION['type'] == 'admin') {
                require_once '../app/views/admin/' . $view . '.php';
            } else if ($_SESSION['type'] == 'user') {
                require_once '../app/views/user/'. $view . '.php';
            }
        }
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}