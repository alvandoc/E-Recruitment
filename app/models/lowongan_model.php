<?php

class lowongan_model
{
    private $db;
    private $namaLowongan;
    private $posisi;
    private $kualifikasi;
    private $deskripsi;
    private $dibuat;
    private $berakhir;

    private $gambar;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getLowongan()
    {
        $sql = "SELECT * FROM lowongan";
        $this->db->query($sql);

        return $this->db->resultSet();
    }

    public function formSubmit($data, $file)
    {
        $this->namaLowongan = $data['nama_lowongan'];
        $this->posisi = $data['posisi'];
        $this->kualifikasi = $data['kualifikasi'];
        $this->dibuat = $data['dibuat'];
        $this->berakhir = $data['berakhir'];
        $this->deskripsi = $data['deskripsi'];
        $this->gambar = $file['gambar'];

        if ($this->validForm()) {
            return $this->insertLowongan();
        }
    }

    private function validForm()
    {
        if (empty($this->namaLowongan) || empty($this->deskripsi) || empty($this->posisi) || empty($this->kualifikasi) || empty($this->dibuat) || empty($this->berakhir)) {
            return false;
        } else {
            return true;
        }
    }

    public function insertLowongan()
    {
        $uploadDir = "assets/img";
        $filename = basename($_FILES['gambar']['name']);
        $uploadPath = $uploadDir . $filename;

        $sql = "INSERT INTO lowongan(namaLowongan,deksripsiLowongan, kualifikasi, created_at,expired_at,posisi,gambar) VALUES (:nama,:desk,:kualifikasi,:created_at,:expired_at,:posisi,:gambar)";
        $this->db->query($sql);
        $this->db->bind('nama', $this->namaLowongan);
        $this->db->bind('desk', $this->deskripsi);
        $this->db->bind('kualifikasi', $this->kualifikasi);
        $this->db->bind('created_at', $this->dibuat);
        $this->db->bind('expired_at', $this->berakhir);
        $this->db->bind('posisi', $this->posisi);

        if (!empty($this->gambar)) {
            $lokasi = $this->gambar['tmp_name'];
            $nama = $this->gambar['name'];
            $nama_gambar = date('dmYHis') . $nama;
            $directory = 'assets/img/dokumen/' . $nama_gambar;

            $this->db->bind('gambar', $nama_gambar);
            move_uploaded_file($lokasi, $directory);
        }
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM lowongan WHERE id_lowongan = :id";
        $this->db->query($sql);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function expired($id_lowongan)
    {
        $waktu_sekarang = time(); //Waktu saat ini
        $data = $this->getLowonganById($id_lowongan);
        $waktu_mulai = strtotime($data['created_at']);
        $waktu_selesai = strtotime($data['expired_at']);

        if ($waktu_sekarang >= $waktu_mulai && $waktu_sekarang <= $waktu_selesai) {
            return true;
        } else {
            return false;
        }
    }

    public function getLowonganById($id)
    {
        $sql = "SELECT * FROM lowongan WHERE id_lowongan = :id";
        $this->db->query($sql);
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}