<?php
    class App
    {
        public function __construct()
        {
            $url = $this->parseURL();
            var_dump($url);
        }

        public function parseURL()
        {
            if (isset($_GET["url"])) {
                $url = rtrim($_GET["url"], '/'); // Menghapus slash diakhir url
                $url = filter_var($url, FILTER_SANITIZE_URL); // Membersihkan url dari karakter aneh
                $url = explode('/', $url); // Pecah url menjadi array
                return $url;
            }
        }
    }
