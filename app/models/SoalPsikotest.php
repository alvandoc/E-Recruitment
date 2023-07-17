<?php

class SoalPsikotest
{
    private $db;
    private $options;
    private $soal;
    private $jawaban;
    private $id;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function setSoal($soal){
        $this->soal = $soal;
    }

    public function setOptions($options){
        $this->options = $options;
    }

    public function setJawaban($answer){
        $this->jawaban = $answer;
    }

    public function getQuestionById($id){
        $sql = "SELECT * FROM soal_psikotest WHERE id_soal = :id_soal";
        $this->db->query($sql);
        $this->db->bind('id_soal',$id);

        return $this->db->single();
    }

    public function getAllQuestions(){
        $sql = "SELECT * FROM soal_psikotest";
        $this->db->query($sql);
        $this->db->execute();

        return $this->db->resultSet();
    }

    public function insertQuestion($soal,$options,$answer){
        $sql = "INSERT INTO soal_psikotest (soal,jawaban,kunci_jawaban) VALUES (:soal,:options,:answer)";
        $this->db->query($sql);
        $this->db->bind('soal',$soal);
        $this->db->bind('options',$options);
        $this->db->bind('answer',$answer);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateQuestion($soal,$options,$answer,$id){
        $sql = "UPDATE soal_psikotest SET soal = :soal,jawaban = :options,:answer WHERE id_soal = :id_soal";
        $this->db->query($sql);
        $this->db->bind('soal',$soal);
        $this->db->bind('options',$options);
        $this->db->bind('answer',$answer);
        $this->db->bind('id_soal',$id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function validateForm(){
        if (empty($this->soal) || empty($this->jawaban) || empty($this->options)){
            return false;
        }

        $optionsArray = explode(';',$this->options);
        if (count($optionsArray) < 2){
            return false;
        }

        if (!in_array($this->jawaban,$optionsArray)){
            return false;
        }


        return true;

    }

    public function addForm($data,?int $id = NULL){
        $this->soal = $data['soal'];
        $this->options = $data['options'];
        $this->jawaban = $data['answer'];

        if ($this->validateForm()){
            if(isset($data['tambah'])){
                $this->insertQuestion($this->soal,$this->options,$this->jawaban);
            }elseif($data['update']){
                $this->id = $id;
                $this->updateQuestion();
            }
        }

    }
}