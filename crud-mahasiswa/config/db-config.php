<?php
class Database{
    //Konfigurasi database
    private $db_host = "db";
    private $db_user = "root";
    private $db_pass = "root";
    private $db_name = "belajar-php-db";
    public $conn; // Variabel koneksi

    // Function konstruktor untuk inisialisasi koneksi database
    public function __construct(){
        //Memanggil koneksi method
        $this->getConnection();
    }

    // Method untuk membuat koneksi database
    public function getConnection(){
        try{
            // Membuat koneksi database menggunakan mysqli
            $this->conn = new mysqli(
                $this->db_host,
                $this->db_user,
                $this->db_pass,
                $this->db_name
            );
            // cek database
            if($this->conn->connect_error){
                //melemparkan exception jika koneksi gagal
                throw new Exception("Connection failed: " . $this->conn->connection_error);
            }
        }catch(Exception $e){
            // menangani exception dan menampilkan pesan error
            die("Connection Error : ". $e->getMessage);
        }
    }
    
}

//$koneksi = new Database();
//var_dump($koneksi);