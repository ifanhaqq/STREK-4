<?php

class User extends Controller {

    public function register() {
        //Process form
            
        //Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        //Init data
        $data = [
            'nama' => trim($_POST['nama']),
            'email' => trim($_POST['email']),
            'username' => trim($_POST['username']),
            'nip' => trim($_POST['nip']),
            'kelas' => trim($_POST['kelas']),
            'password' => trim($_POST['password']),
            'pwdRpt' => trim($_POST['pwdRpt'])
        ];

        //validate pwd
        if($data['password'] !== $data['pwdRpt']) {
            Flasher::setFlash('gagal', 'ditambahkan', 'akun', 'danger');
            header('Location: ' . BASEURL .'/registration');
            exit();
        }

        //check account that already exist
        if ($this->model('User_model')->findUserByEmailOrUsername($data['email'], $data['username'])) {
            Flasher::setFlash('gagal', 'ditambahkan', 'akun', 'danger');
            header('Location: ' . BASEURL .'/registration');
            exit();
        }

        //Passed all validation checks.
        //Now going to hash password
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        if ($this->model('User_model')->register($data) > 0) {
            Flasher::setFlash('berhasil','ditambahkan', 'akun', 'success');
            header('Location: '. BASEURL .'/registration');
        } else {
            Flasher::setFlash('gagal','ditambahkan', 'akun', 'danger');
            header('Location: '. BASEURL .'/registration');
        }

    }

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