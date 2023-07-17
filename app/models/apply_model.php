<?php

class apply_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function inputApply($id_lowongan, $id_user)
    {
        $nama_lowongan = $this->getPelamarPsikotest($id_lowongan);


        $sql = "INSERT INTO status_lamaran (id_user,id_lowongan,nama_lowongan) VALUES (:id_user,:id_lowongan,:nama)";
        $this->db->query($sql);
        $this->db->bind('id_user', $id_user);
        $this->db->bind('id_lowongan', $id_lowongan);
        foreach ($nama_lowongan as $lowongan) {
            $this->db->bind('nama', $lowongan['nama_lowongan']);
        }
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function getPelamarPsikotest($id_lowongan)
    {
        $sql = "SELECT users.id_user,users.nama_lengkap,lowongan.id_lowongan,lowongan.nama_lowongan,status_lamaran.id_user,status_lamaran.id_lowongan,status_lamaran.status,status_lamaran.jadwal
        FROM users INNER JOIN status_lamaran ON users.id_user = status_lamaran.id_user
        INNER JOIN lowongan ON lowongan.id_lowongan = status_lamaran.id_lowongan WHERE status_lamaran.status = 'shortlist' AND lowongan.id_lowongan = :id
        ";
        $this->db->query($sql);
        $this->db->bind('id', $id_lowongan);
        return $this->db->resultSet();
    }

    public function getPelamarPsikotestById($id_lowongan, $id_user)
    {
        $sql = "SELECT users.id_user,users.nama_lengkap,lowongan.id_lowongan,lowongan.nama_lowongan,status_lamaran.id_user,status_lamaran.id_lowongan,status_lamaran.status,status_lamaran.jadwal
        FROM users INNER JOIN status_lamaran ON users.id_user = status_lamaran.id_user
        INNER JOIN lowongan ON lowongan.id_lowongan = status_lamaran.id_lowongan WHERE status.id_user = :id
        ";
        $this->db->query($sql);
        return $this->db->single();
    }
}