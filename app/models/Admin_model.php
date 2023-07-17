<?php

class Admin_model
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function login($data){
        $sql = "SELECT * FROM admin WHERE email = :email AND password = :password";
        $this->db->query($sql);
        $this->db->bind('email',$data['email']);
        $this->db->bind('password',md5($data['password']));
        return $this->db->single();
    }

    public function tambahSoal($data){
        $soal = trim($data['soal']);
        $jawaban = array_map('trim', explode(';',$data['pilihanganda']));
        $pilihanganda = implode(';',$jawaban);

        $kunci_jawaban = trim($data['kunci_jawaban']);
        $sql = "INSERT INTO soal_psikotest (soal,jawaban,kunci_jawaban) VALUES (:soal,:jawaban,:kunci_jawaban)";
        $this->db->query($sql);
        $this->db->bind('soal',$soal);
        $this->db->bind('jawaban',$pilihanganda);
        $this->db->bind('kunci_jawaban',$kunci_jawaban);

        return $this->db->rowCount();
    }

}