<?php

class Ujian extends Controller
{

    public function index()
    {
        $this->view('Templates/admin/header');
        $this->view('user/ujian');
        $this->view('Templates/admin/footer');
    }
}