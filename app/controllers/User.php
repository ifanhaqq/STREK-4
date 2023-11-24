<?php

class User extends Controller {

    public function register() {  
        //Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


        //Init data
        $foto_nama = $_FILES['foto']['name'];
        $foto_temp = $_FILES['foto']['tmp_name'];
        $foto_size = $_FILES['foto']['size'];
        $foto_type = $_FILES['foto']['type'];

        if($foto_type != 'image/jpeg'
                        & $foto_type != 'image/pjpeg'
                        & $foto_type != 'image/gif'
                        & $foto_type != 'image/png') {
        Flasher::setFlash('gagal', 'ditambahkan', 'foto', 'danger');
        header('Location: ' . BASEURL . '/registration');
        exit();
        }
        $data = [
            'nama' => trim($_POST['nama']),
            'foto'=> $foto_nama,
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
            move_uploaded_file($foto_temp, 'img/' . $foto_nama);
            header('Location: '. BASEURL .'/registration');
        } else {
            Flasher::setFlash('gagal','ditambahkan', 'akun', 'danger');
            header('Location: '. BASEURL .'/registration');
            exit();
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
                Flasher::setLoginFlash('danger', 'Password yang anda masukkan', 'salah');
                header('Location: ' . BASEURL);
                exit;
            }
        }else{
            Flasher::setLoginFlash('danger', 'Akun', 'tidak terdaftar');
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function logout(){
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['nip']);
        unset($_SESSION['kelas']);
        unset($_SESSION['foto']);
        unset($_SESSION['type']);
        unset($_SESSION['tab_id']);
        session_destroy();
        header('Location: ' . BASEURL);
    }

    public function createUserSession($user){
        session_start();
        $_SESSION['id'] = $user->id;
        $_SESSION['foto'] = $user->foto;
        $_SESSION['name'] = $user->name;
        $_SESSION['email'] = $user->email;
        $_SESSION['nip'] = $user->nip;
        $_SESSION['kelas'] = $user->kelas;
        $_SESSION['type'] = $user->type;
        $_SESSION['tab_id'] = $user->tab_id;
        header('Location: ' . BASEURL);
    }

    public function dump()
    {
        echo var_dump($_POST);
        
    }


}