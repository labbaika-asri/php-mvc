<?php
    class Mahasiswa extends Controller
    {
        public function index()
        {
            $data = [
                "judul" => "Data Mahasiswa",
                "mhs" => $this->model("mahasiswa_model")->getAllMahasiswa()
            ];
            $this->view("templates/header", $data);
            $this->view("mahasiswa/index", $data);
            $this->view("templates/footer");
        }

        public function detail($id)
        {
            $data = [
                "judul" => "Detail Mahasiswa",
                "mhs" => $this->model("mahasiswa_model")->getMahasiswaById($id)
            ];
            $this->view("templates/header", $data);
            $this->view("mahasiswa/detail", $data);
            $this->view("templates/footer");
        }
    }
