<?php

class psikotest extends Controller
{
    public function index()
    {
        if (isset($_SESSION['admin'])) {
            $data['lowongan'] = $this->model('lowongan_model')->getLowongan();
            $this->view('Templates/admin/header');
            $this->view('Admin/psikotest/daftar', $data);
            $this->view('Templates/admin/footer');
        } else {
            $this->view('admin/login');
            $this->view('Templates/footer');
        }
    }

    public function detailPsikotest($id_lowongan)
    {
        if (isset($_SESSION['admin'])) {
            $data['pelamar'] = $this->model('apply_model')->getPelamarPsikotest($id_lowongan);
            $data['lowongan'] = $this->model('lowongan_model')->getLowonganById($id_lowongan);
            $this->view('Templates/admin/header');
            $this->view('admin/psikotest/detail', $data);
            $this->view('Templates/admin/footer');
        } else {
            $this->view('admin/login');
            $this->view('Templates/admin/footer');
        }
    }

    public function soalPsikotest()
    {
        if (isset($_SESSION['admin'])) {
            $this->view('Templates/admin/header');
            $this->view('admin/psikotest/tambahSoal');
            $this->view('Templates/admin/footer');
        } else {
            $this->view('admin/login');
            $this->view('Templates/admin/footer');
        }
    }

    public function tambahSoal()
    {
        if ($this->model('SoalPsikotest')->addForm($_POST) > 0) {
            header('Location:' . BASEURL . 'Admin/soalPsikotest');
        } else {
            echo "<script>alert('Gagal')</script>";
            header('Location:' . BASEURL . 'Admin/soalPsikotest');
        }
    }

    public function tambahTestPsikotest()
    {
        if (isset($_SESSION['admin'])) {
            $this->view('Templates/admin/header');
            $this->view('admin/psikotest/tambahJadwal');
            $this->view('Templates/admin/footer');
        } else {
            $this->view('admin/login');
            $this->view('Templates/admin/footer');
        }
    }
}