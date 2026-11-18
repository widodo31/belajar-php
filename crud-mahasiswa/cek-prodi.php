<?php
include_once 'config/db-config.php';
class CekProdi extends Database{
    public function menampilkanData(){
        $query = "SELECT * FROM tb_prodi";
        $result = $this->conn->query($query);
        if($result->num_rows > 0){
            while($row = $result->fetch_object()){
                //var_dump($row['kode_prodi']);
                echo "Nama Program Studi : " . $row->nama_prodi;
                echo "<br>";
            }
        }else{
            echo "gagal masuk";
        }

    }

}
$master = new CekProdi();
$master->menampilkanData();
