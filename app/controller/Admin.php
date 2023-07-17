<?php

class Admin extends Controller
{
    public function index(){
        if (isset($_SESSION['admin'])){
            $this->view('Templates/admin/header');
            $this->view('admin/index');
            $this->view('Templates/admin/footer');
        }else{
            $this->view('admin/login');
            $this->view('Templates/admin/footer');
        }
    }

    public function login(){
        $data['admin'] = $this->model('Admin_model')->login($_POST);
        if (isset($data['admin']['id_admin'])){
            $_SESSION['admin'] = $data['admin']['nama_lengkap'];
            header('Location:' . BASEURL . 'admin/index');
        }else{
            $this->view('admin/login');
            $this->view('Templates/admin/footer');
        }
    }

    public function keluar(){
        unset($_SESSION['admin']);

        header('Location:' . BASEURL . 'Admin');
    }
}