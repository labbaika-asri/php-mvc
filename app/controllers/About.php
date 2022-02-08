<?php
    class About extends Controller
    {
        public function index($nama = "Labbaika Asri", $pekerjaan = "Programer", $umur = 21)
        {
            $data = [
                "nama" => $nama,
                "pekerjaan" => $pekerjaan,
                "umur" => $umur
            ];
            $this->view('templates/header', ["judul" => "Halaman About"]);
            $this->view('about/index', $data);
            $this->view('templates/footer');
        }

        public function page()
        {
            $this->view('templates/header', ["judul" => "Halaman Page"]);
            $this->view('about/page');
            $this->view('templates/footer');
        }
    }
