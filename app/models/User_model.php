<?php

class User_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAll()
    {
        $query = "SELECT * FROM users";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function login($data)
    {
        $query = "SELECT * FROM users WHERE email = :email AND password = :password ";
        $this->db->query($query);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', md5($data['password']));
        return $this->db->single();
    }

    public function lupa($data)
    {
        $query = "SELECT * FROM users WHERE email = :username";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->execute();
        return $this->db->single();
    }

    public function getUserId($id)
    {
        $query = "SELECT * FROM users WHERE id_user = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->single();
    }

    public function daftar($data)
    {
        $query = "INSERT INTO users (email,password,nama_lengkap) VALUES (:username,:password,:nama_lengkap)";
        $this->db->query($query);
        $this->db->bind('username', $data['email']);
        $this->db->bind('password', md5($data['password']));
        $this->db->bind('nama_lengkap', trim($data['nama_lengkap']));
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updatedAt($id_user)
    {
        $tanggal = date('d-m-Y H:i:s');

        $query = "UPDATE users SET updated_at = :updated_at WHERE id_user = :id";

        $this->db->query($query);
        $this->db->bind('updated_at', $tanggal);
        $this->db->bind('id', $id_user);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function insertBio($data)
    {
        $query = "INSERT INTO biodata_user (id_user, nik_ktp,jenis_kl,tanggal_lahir, alamat, nomor_hp) VALUES (:id_user, :nik_ktp, :Jns_kelamin, :tgl_lahir, :alamat, :no_hp)";
        $this->db->query($query);
        $this->db->bind('id_user', $_SESSION['id']);
        $this->db->bind('nik_ktp', $data['nikKtp']);
        $this->db->bind('Jns_kelamin', $data['jenisKl']);
        $this->db->bind('tgl_lahir', $data['tglLahir']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_hp', $data['nomorHp']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function insertLatarPendidikan($data)
    {
        $sql = "INSERT INTO riwayat_pendidikan (id_user, pendidikan, universitas, jurusan, ipk, tanggal_mulai,tanggal_selesai) VALUES (:id_user,:pendidikan,:universitas,:jurusan,:ipk,:tanggal_mulai,:tanggal_selesai)";
        $this->db->query($sql);
        $this->db->bind('id_user', $_SESSION['id']);
        $this->db->bind('pendidikan', $data['pendidikan']);
        $this->db->bind('universitas', $data['universitas']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('ipk', $data['ipk']);
        $this->db->bind('tanggal_mulai', $data['tglMulai']);
        $this->db->bind('tanggal_selesai', $data['tglSelesai']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function insertRiwayatPekerjaan($data)
    {
        $sql = "INSERT INTO riwayat_pekerjaan (id_user,perusahaan,posisi,tanggal_masuk,tanggal_keluar) VALUES (:id_user,:perusahaan,:posisi,:tanggal_masuk,:tanggal_keluar)";
        $this->db->query($sql);
        $this->db->bind('id_user', $_SESSION['id']);
        $this->db->bind('perusahaan', $data['perusahaan']);
        $this->db->bind('posisi', $data['posisi']);
        $this->db->bind('tanggal_masuk', $data['tglMasuk']);
        $this->db->bind('tanggal_keluar', $data['tglKeluar']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function insertDokumenWajib($data, $file)
    {
        $lokasi_cv = $file['cv_file']['tmp_name'];
        $nama_cv = $file['cv_file']['name'];
        $directory_cv = './assets/dokument/' . $nama_cv;

        $lokasi_ktp = $file['ktp_file']['tmp_name'];
        $nama_ktp = $file['ktp_file']['name'];
        $directory_ktp = './assets/dokument/' . $nama_ktp;

        $lokasi_ijazah = $file['ijazah_file']['tmp_name'];
        $nama_ijazah = $file['ijazah_file']['name'];
        $directory_ijazah = './assets/dokument/' . $nama_ijazah;

        $lokasi_transkrip = $file['transkrip_file']['tmp_name'];
        $nama_transkrip = $file['transkrip_file']['name'];
        $directory_transkrip = './assets/dokument/' . $nama_transkrip;

        $lokasi_skck = $file['skck_file']['tmp_name'];
        $nama_skck = $file['skck_file']['name'];
        $directory_skck = './assets/dokument/' . $nama_skck;

        $lokasi_npwp = $file['npwp_file']['tmp_name'];
        $nama_npwp = $file['npwp_file']['name'];
        $directory_npwp = './assets/dokument/' . $nama_npwp;

        $sql = "INSERT INTO dokument_wajib (id_user,cv,ktp,ijazah,transkrip_nilai,skck,npwp) VALUES (:id_user,:cv,:ktp,:ijazah,:transkrip,:skck,:npwp)";
        $this->db->query($sql);
        $this->db->bind('id_user', $_SESSION['id']);

        if (!empty($lokasi_cv)) {
            $this->db->bind('cv', $nama_cv);
            move_uploaded_file($lokasi_cv, $directory_cv);
        }
        if (!empty($lokasi_ktp)) {
            $this->db->bind('ktp', $nama_ktp);
            move_uploaded_file($lokasi_ktp, $directory_ktp);
        }
        if (!empty($lokasi_ijazah)) {
            $this->db->bind('ijazah', $nama_ijazah);
            move_uploaded_file($lokasi_ijazah, $directory_ijazah);
        }
        if (!empty($lokasi_transkrip)) {
            $this->db->bind('transkrip', $nama_transkrip);
            move_uploaded_file($lokasi_transkrip, $directory_transkrip);
        }
        if (!empty($lokasi_skck)) {
            $this->db->bind('skck', $nama_skck);
            move_uploaded_file($lokasi_skck, $nama_skck);
        }
        if (!empty($lokasi_npwp)) {
            $this->db->bind('npwp', $nama_npwp);
            move_uploaded_file($lokasi_npwp, $directory_npwp);
        }

        $this->db->execute();
        return $this->db->rowCount();
    }
}