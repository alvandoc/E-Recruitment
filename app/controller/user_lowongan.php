<?php

class user_lowongan extends Controller
{
    public function index()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = "E Recruitment ";
            $data['user'] = $this->model('User_model')->getUserId($_SESSION['id']);
            $data['lowongan'] = $this->model('lowongan_model')->getLowongan();
            $this->view('Templates/user/header', $data);
            $this->view('user/lowongan', $data);
            $this->view('Templates/user/footer', $data);
        } else {
            Flasher::setFlash('error', 'Silahkan Login Dahulu', 'belum login');
            header('Location:' . BASEURL . 'home');
        }
    }

    public function apply($id_lowongan, $id_user)
    {

        if (isset($_SESSION['id'])) {
            if ($this->model('apply_model')->inputApply($id_lowongan, $id_user) > 0) {
                Flasher::setFlash('succes', 'Sukses', 'Berhasil Apply Lowongan');
                header('Location:' . BASEURL . 'home');
                exit();
            } else {
                Flasher::setFlash('error', 'Gagal', 'Tidak Berhasil Apply Lowongan');
                header('Location:' . BASEURL . 'home');
                exit();
            }
        } else {
            Flasher::setFlash('error', 'Gagal', 'Harap melakukan login dahulu');
            header('Location:' . BASEURL . 'home');
            exit();
        }
    }
}