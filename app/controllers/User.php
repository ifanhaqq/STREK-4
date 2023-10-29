<?php

class User extends Controller {

    public function login(){
        //Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        //Init data
        $data=[
            'username/email' => trim($_POST['username/email']),
            'password' => trim($_POST['password'])
        ];

        //Check for user/email
        if($this->model('User_model')->findUserByEmailOrUsername($data['username/email'], $data['username/email'])){
            
            //User Found
            $loggedInUser = $this->model('User_model')->login($data['username/email'], $data['password']);
            session_start();
            if($loggedInUser){
                //Create session
                $this->createUserSession($loggedInUser);
            }else{
                echo "salah";
            }
        }else{
            echo "false";
        }
    }

    public function logout(){
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['nip']);
        unset($_SESSION['kelas']);
        session_destroy();
        header('Location: ' . BASEURL);
    }

    public function createUserSession($user){
        session_start();
        $_SESSION['id'] = $user->id;
        $_SESSION['name'] = $user->name;
        $_SESSION['email'] = $user->email;
        $_SESSION['nip'] = $user->nip;
        $_SESSION['kelas'] = $user->kelas;
        header('Location: ' . BASEURL);
    }


}