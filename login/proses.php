<?php
include_once '../crud-mahasiswa/config/db-config.php';
class Proses extends Database{
    public function register($data){
        $nama = $data['nama'];
        $email = $data['email'];
        $username = $data['username'];
        $password = $data['password'];

        $query = "INSERT INTO users (name, username, email, password) VALUES (?,?,?,?) ";
        $stmt = $this->conn->prepare($query);
        if(!$query){
            return false;
        }
        $stmt->bind_param("ssss",$nama, $username, $email, $password);
        $result = $stmt->execute();
        $stmt->close();
        return $result;

    }

    public function getEmail($email){
        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->conn->prepare($query);
        if(!$stmt){
            return false;
        }
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();
        if($user){
            return $user;
        }else{
            return false;
        }
        
    }   

    public function cekPassword($email, $pass){
        $user = $this->getEmail($email);
        if($user){
            $password = password_verify($pass, $user['password']);
            
            if($password){
            return true;
            }else{
                return false;
            }
        }
        
        
        
        
        
    }
}