<?php
// Memasukkan file konfigurasi database
include_once 'db-config.php';

class MasterData extends Database{

    // Method untuk mendapatkan daftar programs tudi
    public function getProdi(){
        $query = "SELECT * FROM tb_prodi";
        $result = $this->conn->query($query);
        $prodi = [];
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $prodi [] = [
                    'id' => $row['kode_prodi'],
                    'nama' => $row['nama_prodi']
                ];
            }
        }
        return $prodi;
    }

    // Method untuk menghapus data program studi
    public function deleteProdi($id){
        $query = "DELETE FROM tb_prodi WHERE kode_prodi = ?";
        $stmt = $this->conn->prepare($query);
        if(!$stmt){
            return false;
        }
        $stmt->bind_param("s", $id);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }

    public function inputProdi($data){
        $kodeProdi = $data['kode'];
        $namaProdi = $data['nama'];
        $query = "INSERT INTO tb_prodi (kode_prodi, nama_prodi) VALUES (?, ?)";
        $stmt = $this->conn->prepare($query);
        if(!$stmt){
            return false;
        }
        $stmt->bind_param("ss", $kodeProdi, $namaProdi);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }

    public function getUpdateProdi($id){
        $query = "SELECT * FROM tb_prodi WHERE kode_prodi = ?";
        $stmt = $this->conn->prepare($query);
        if(!$stmt){
            return false;
        }
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $prodi = null;
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $prodi = [
                'id' => $row['kode_prodi'],
                'nama' => $row['nama_prodi']
            ];
        }
        $stmt->close();
        return $prodi;

    }

    public function updateProdi($data){
        $kodeProdi = $data['kode'];
        $namaProdi = $data['nama'];
        // echo $kodeProdi;
        // echo $namaProdi;
        $query = "UPDATE tb_prodi SET nama_prodi = ? WHERE kode_prodi = ?";
        $stmt = $this->conn->prepare($query);
        if(!$stmt){
            return false;
        }
        $stmt->bind_param("ss", $namaProdi, $kodeProdi);
        $result = $stmt->execute();
        $stmt->close();
        return $result;

    }
    /** End all function prodi */
/** ================================================================================================ */
    /** Start all function Provinsi */
    public function getProvinsi(){
        $query = "SELECT * FROM tb_provinsi";
        $result = $this->conn->query($query);
        $provinsi = [];
        if($result->num_rows >0){
            while($row = $result->fetch_assoc()){
                $provinsi[] = [
                    'id' => $row['id_provinsi'],
                    'nama' => $row['nama_provinsi'] 
                ];
            }
        }
        return $provinsi;
    }

    public function getUpdateProvinsi($id){
        $query = "SELECT * FROM tb_provinsi WHERE id_provinsi = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i",$id);
        if(!$stmt){
            return false;
        }
        $stmt->execute();
        $result = $stmt->get_result();
        $prov = null;
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $prov = [
                'id' => $row['id_provinsi'],
                'nama' => $row['nama_provinsi']
            ];
        }
        $stmt->close();
        return $prov;

    }
    public function updateProvinsi($data){
        $id = $data['id'];
        $nama = $data['nama'];
        $query = "UPDATE tb_provinsi SET nama_provinsi = ? WHERE id_provinsi = ?";
        $stmt = $this->conn->prepare($query);
        if(!$stmt){
            return false;
        }
        $stmt->bind_param("si", $nama, $id);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }

    public function deleteProvinsi($id){
        $query = "DELETE FROM tb_provinsi WHERE id_provinsi = ?";
        $stmt = $this->conn->prepare($query);
        if(!$stmt){
            return false;
        }
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }

    public function inputProvinsi($nama){
        $query = "INSERT INTO tb_provinsi (nama_provinsi) VALUES (?)";
        $stmt = $this->conn->prepare($query);
        if(!$stmt){
            return false;
        }
        $stmt->bind_param("s", $nama);
        $result = $stmt->execute();
        $stmt->close();
        return $result;

    }

    /** End all function provinsi */

    /** start function status */
    public function getStatus(){
        return[
            ['id' => 1, 'nama' => 'Aktif'],
            ['id' => 2, 'nama' => 'Tidak Aktif'],
            ['id' => 3, 'nama' => 'Cuti'],
            ['id' => 4, 'nama' => 'Lulus']
        ];
    }
    /** End function status */
}
    