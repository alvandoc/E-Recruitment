<?php

class Lowongan extends Controller
{
    public function index()
    {
        if (isset($_SESSION['admin'])) {
            $data['lowongan'] = $this->model('lowongan_model')->getLowongan();
            $this->view('Templates/admin/header');
            $this->view('admin/lowongan/listLowongan', $data);
            $this->view('Templates/admin/footer');
        } else {
            Flasher::setFlash('error', 'Silahkan Login Dahulu', 'belum login');
            $this->view('admin/login');
            $this->view('Templates/admin/footer');
        }
    }

    public function daftarLowongan()
    {
        if ($_SESSION['admin']) {

            $this->view('Templates/admin/header');
            $this->view('admin/lowongan/tambahLowongan');
            $this->view('Templates/admin/footer');
        } else {
            $this->view('admin/login');
            $this->view('Templatees/admin/footer');
        }
    }


    public function detailLowongan($id_lowongan)
    {
        if (isset($_SESSION['admin'])) {
            $data['lowongan'] = $this->model('lowongan_model')->getLowonganById($id_lowongan);
            $this->view('Templates/admin/header', $data);
            $this->view('admin/lowongan/detail', $data);
            $this->view('Templates/admin/footer', $data);
        } else {
            $this->view('admin/login');
            $this->view('Templates/admin/footer');
        }
    }

    public function tambahLowongan()
    {
        if (isset($_SESSION['admin'])) {
            $this->view('Templates/admin/header');
            $this->view('admin/lowongan/tambah');
            $this->view('Templates/admin/footer');
        } else {
            $this->view('admin/login');
            $this->view('Templates/admin/footer');
        }
    }

    public function tambah()
    {
        if ($this->model('lowongan_model')->formSubmit($_POST, $_FILES) > 0) {
            header('Location:' . BASEURL . 'admin/lowongan');
        } else {
            Flasher::setFlash('Error', 'Silahkan Login');
            header('Location:' . BASEURL . 'admin/lowongan');
        }
    }

    public function hapus($id)
    {
        if (isset($_SESSION['admin'])) {
            if ($this->model('lowongan_model')->hapus($id) > 0) {
                Flasher::setFlash('succes', 'Data Berhasil Dihapus', 'Done');
                header('Location:' . BASEURL . 'admin/lowongan');
                exit();
            } else {
                Flasher::setFlash('error', 'oopss...', 'Data tidak berhasil dihapus');
                header('Location:' . BASEURL . 'admin/lowongan');
                exit();
            }
        } else {
            header('Location:' . BASEURL . 'admin/lowongan');
            exit();
        }
    }
}