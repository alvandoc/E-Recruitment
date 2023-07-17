<?php

class wawancara extends Controller
{
    public function index()
    {
        if ($_SESSION['admin']) {
            $data['lowongan'] = $this->model('lowongan_model')->getLowongan();
            $this->view('Templates/admin/header');
            $this->view('admin/interview/daftar', $data);
            $this->view('Templates/admin/footer');
        } else {
            $this->view('admin/login');
            $this->view('Templates/admin/footer');
        }
    }

    public function detailWawancara($id_lowongan)
    {
        if (isset($_SESSION['admin'])) {
            $data['pelamar'] = $this->model('apply_model')->getPelamarPsikotest($id_lowongan);
            $data['lowongan'] = $this->model('lowongan_model')->getLowonganById($id_lowongan);
            $this->view('Templates/admin/header');
            $this->view('admin/interview/detail', $data);
            $this->view('Templates/admin/footer');
        } else {
            $this->view('admin/login');
            $this->view('Templates/admin/footer');
        }
    }

    public function getPelamarPsikotest($id_lowongan)
    {
        $sql = "SELECT users.id_user,users.nama_lengkap,lowongan.id_lowongan,lowongan.namaLowongan,status_lamaran.id_user,status_lamaran.id_lowongan,status_lamaran.status,status_lamaran.jadwal
        FROM users INNER JOIN status_lamaran ON users.id_user = status_lamaran.id_user
        INNER JOIN lowongan ON lowongan.id_lowongan = status_lamaran.id_lowongan WHERE status_lamaran.status = 'wawancara'
        ";
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function tambahJadwalInterview()
    {
        if (isset($_SESSION['admin'])) {
            $this->view('Templates/admin/header');
            $this->view('admin/interview/tambahJadwal');
            $this->view('Templates/admin/footer');
        } else {
            $this->view('admin/login');
            $this->view('Templates/admin/footer');
        }
    }
}