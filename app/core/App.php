<?php
    class App
    {
        protected $controller = 'Home';
        protected $method = 'index';
        protected $params = [];

        public function __construct()
        {
            $url = $this->parseURL();

            // Cek apakah file controller ada
            if (is_array($url) && file_exists("../app/controllers/" . $url[0] . ".php")) {
                $this->controller = $url[0];
                unset($url[0]); // Menghapus url[0]
            }
            require_once '../app/controllers/' . $this->controller . '.php';
            $this->controller = new $this->controller;
            
            // method
            if (isset($url[1])) {
                // Cek apakah terdapat method
                if (method_exists($this->controller, $url[1])) {
                    $this->method = $url[1];
                    unset($url[1]);
                }
            }

            // params
            if (!empty($url)) {
                $this->params = array_values($url); // Memindahkan isi dari array url ke property params
            }

            // Jalankan controller dan method serta kirimkan params jika ada
            call_user_func_array([$this->controller, $this->method], $this->params);
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
