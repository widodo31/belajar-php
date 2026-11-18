<?php
include_once 'db-config.php';

class Mahasiswa extends database{
    public function inputMahasiswa($data){
        $nim = $data['nim'];
        $nama = $data['nama'];
        $prodi = $data['prodi'];
        $alamat = $data['alamat'];
        $email = $data['email'];
        $provinsi = $data['provinsi'];
        $telp = $data['telp'];
        $status = $data['status'];

        $query = "INSERT INTO tb_mahasiswa (nim_mhs, nama_mhs, prodi_mhs, alamat, provinsi, email, telp, status_mhs) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($query);
        if(!$stmt){
            return false;
        }
        $stmt->bind_param("ssssissi", $nim, $nama, $prodi, $alamat, $provinsi, $email, $telp, $status);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }

    public function getMahasiswa(){
        $query = "SELECT m.nim_mhs, m.nama_mhs, p.nama_prodi, m.alamat, pr.nama_provinsi, m.email, m.telp, m.status_mhs 
                    FROM tb_mahasiswa AS m
                    JOIN tb_prodi AS p ON m.prodi_mhs = p.kode_prodi
                    JOIN tb_provinsi AS pr ON m.provinsi = pr.id_provinsi";
        $result = $this->conn->query($query);
        $mhs = [];
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $mhs[] = [
                    'nim' => $row['nim_mhs'],
                    'nama' => $row['nama_mhs'],
                    'prodi' => $row['nama_prodi'],
                    'alamat' => $row['alamat'],
                    'provinsi' => $row['nama_provinsi'],
                    'email' => $row['email'],
                    'telp' => $row['telp'],
                    'status' => $row['status_mhs']
                ];
            }
        }
        return $mhs;
    }

    public function searchMahasiswa($search){
        $like = "%".$search."%";
        $query = "SELECT m.nim_mhs, m.nama_mhs, p.nama_prodi, m.alamat, pr.nama_provinsi, m.email, m.telp, m.status_mhs 
                FROM tb_mahasiswa AS m
                JOIN tb_prodi AS p ON m.prodi_mhs = p.kode_prodi
                JOIN tb_provinsi AS pr ON m.provinsi = pr.id_provinsi
                WHERE nim_mhs LIKE ? OR nama_mhs LIKE ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ss", $like, $like);
        $stmt->execute();
        $result = $stmt->get_result();
        $mhs = [];
        while($row = $result->fetch_assoc()){
            $mhs[] = [
                'nim' => $row['nim_mhs'],
                'nama' => $row['nama_mhs'],
                'prodi' => $row['nama_prodi'],
                'alamat' => $row['alamat'],
                'provinsi' => $row['nama_provinsi'],
                'email' => $row['email'],
                'telp' => $row['telp'],
                'status' => $row['status_mhs']
            ];
        }
        return $mhs;


    }
}