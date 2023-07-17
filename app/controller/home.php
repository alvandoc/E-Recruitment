<?php

class home extends Controller
{

    public function index()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = "E Recruitment ";
            $data['user'] = $this->model('User_model')->getUserId($_SESSION['id']);
            $this->view('templates/user/header', $data);
            $this->view('index', $data);
            $this->view('templates/user/footer', $data);
        } else {
            $data['judul'] = "E Recruitment";
            $this->view('templates/user/header', $data);
            $this->view('index');
            $this->view('templates/user/footer');
        }
    }

    public function masuk()
    {
        $data['user'] = $this->model('User_model')->login($_POST);
        if (isset($data['user']['id_user'])) {
            $_SESSION['id'] = $data['user']['id_user'];
            $_SESSION['nama_user'] = $data['user']['nama_lengkap'];
            if ($this->model('User_model')->updatedAt($data['user']['id_user']) > 0) {
                header('Location: ' . BASEURL);
            } else {
                Flasher::setFlash('error', 'Username dan Password Salah', 'Username dan Password Salah');
                header('Location: ' . BASEURL . 'home');
                exit;
            }
        } else {
            Flasher::setFlash('error', 'Opppsss ...', 'Username dan Password Salah');
            header('Location: ' . BASEURL . 'home');


            exit;
        }
    }


    public function keluar()
    {
        session_destroy();
        header('Location:' . BASEURL);
        exit();
    }

    public function lupa()
    {
        if ($this->model('User_model')->lupa($_POST['username']) > 0) {
            Flasher::setFlash('Sukses', 'Sukses', 'danger');
            header('location' . BASEURL);
        } else {
            Flasher::setFlash('error', 'Silahkan Cek username', 'danger');
            header('location' . BASEURL);
        }
    }

    public function daftar()
    {
        if ($this->model('User_model')->daftar($_POST) > 0) {
            Flasher::setFlash('success', 'Akun berhasil dibuat', 'Silahkan Login menggunakan akun yang terdaftar');
            header('Location:' . BASEURL . 'home');
        } else {
            Flasher::setFlash('error', 'Gagal membuat akun', 'danger');
            header('Location:' . BASEURL . 'home');
        }
    }

    public function aboutUs()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'E Recruitment';
            $data['user'] = $this->model('User_model')->getUserId($_SESSION['id']);
            $this->view('Templates/user/header', $data);
            $this->view('user/aboutUs');
            $this->view('Templates/user/footer');
        } else {
            $this->view('Templates/user/header', $data);
            $this->view('user/aboutUs');
            $this->view('Templates/user/footer');
        }
    }
}

