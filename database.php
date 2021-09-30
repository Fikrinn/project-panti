<?php   

    class Database {
        public $hostname = "localhost", 
               $username = "root",
               $password = "",
               $database = "panti_asuhan";
        
        public $koneksi;

        public function __construct()
        {
            $this->koneksi = mysqli_connect(
                $this->hostname, $this->username, $this->password, $this->database
            );

            if(!$this->koneksi){
                echo "gagal";
            }
        }
        

    }

    include 'anak.php';

    $database = new Database();
