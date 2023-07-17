<?php

class bioUser extends Controller
{

    public function index()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'E Recruitment';
            $data['user'] = $this->model('User_model')->getUserId($_SESSION['id']);
            $this->view('templates/user/header', $data);
            $this->view('user/bioUser');
            $this->view('templates/user/footer');
        } else {
            Flasher::setFlash('error', 'Silahkan Login Dahulu', 'belum login');
            header('Location:' . BASEURL . '/home');
            exit();
        }
    }

    public function insertBioData()
    {
        if (isset($_SESSION['id'])) {
            if ($this->model('User_model')->insertBio($_POST) > 0) {
                Flasher::setFlash('succes', 'Biodata Telah Ditambahkan', 'success');
                header('Location:' . BASEURL . '/bioUser');
                exit();
            } else {
                Flasher::setFlash('Gagal', 'Biodata tidak berhasil ditambah', 'danger');
                header('Location:' . BASEURL . '/bioUser');
                exit();
            }
        }
    }

    public function insertPendidikan()
    {
        if ($this->model('User_model')->insertLatarPendidikan($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'Sukses Menambahkan Latar Belakang', 'success');
            header('Location:' . BASEURL . '/bioUser');
            exit();
        } else {
            Flasher::setFlash('Gagal', 'Gagal Menambahkan Latar Belakang', 'danger');
            header('Location:' . BASEURL . '/bioUser');
            exit();
        }
    }

    public function addPekerjaan()
    {
        if ($this->model('User_model')->insertRiwayatPekerjaan($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'Sukses Menambahkan Riwayat Pekerjaan', 'success');
            header('Location:' . BASEURL . '/bioUser');
            exit();
        } else {
            Flasher::setFlash('Gagal', 'Tidak Berhasil Menambahkan Riwayat', 'danger');
            header('Location:' . BASEURL . '/bioUser');
            exit();
        }
    }

    public function addDokumenWajib()
    {
        if ($this->model('User_model')->insertDokumenWajib($_POST, $_FILES) > 0) {
            Flasher::setFlash('Sukses', 'Berhasil menambahkan Dokumen', 'succeess');
            header('Location:' . BASEURL . '/bioUser');
            exit();
        } else {
            Flasher::setFlash('Gagal' . 'Gagal Menambahkan Dokumen' . 'danger');
            header('Location:' . BASEURL . '/bioUser');
            exit();
        }
    }
}