<?php
include_once '../../crud-mahasiswa/config/db-config.php';

class Menu extends Database{

    public function getMenu(){
        $query = "SELECT * FROM tb_rbac_menus";
        $result = $this->conn->query($query);
        $menu = [];
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $menu[] = [
                    'id' => $row['id'],
                    'nama' => $row['nama_menu'],
                    'url' => $row['url'],
                    'icon' => $row['icon'],
                    'urutan' => $row['urutan'],
                    'is_active' =>$row['is_active']
                ];
            }
        }
        return $menu;
    }

    public function getMenuId($id){
        $query = "SELECT * FROM tb_rbac_menus WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        if(!$stmt){
            return false;
        }
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $menu = null;
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $menu = [
                'id' => $row['id'],
                'nama' => $row['nama_menu'],
                'url' => $row['url'],
                'icon' => $row['icon'],
                'urutan' => $row['urutan'],
                'isactive' => $row['is_active']
            ];
        }
        $stmt->close();
        return $menu;
    }

    public function updateMenu($data){
        $id = $data['id'];
        $nama = $data['nama'];
        $url = $data['url'];
        $icon = $data['icon'];
        $urutan = $data['urutan'];
        $isactive = $data['isactive'];

        $query = "UPDATE tb_rbac_menus SET nama_menu = ?, url = ?, icon = ?, urutan = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        if(!$stmt){
            return false;
        }
        $stmt->bind_param("sssii", $nama, $url, $icon, $urutan, $id);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }

    public function softDeleteMenu($id){
        $timestamp = date('Y-m-d H:i:s');
        $query = "UPDATE tb_rbac_menus SET deleted_at = $timestamp WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        if(!$stmt){
            return false;
        }
        $stmt->bind_param($i, $id);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }

    public function inputMenu($data){
        $nama = $data['nama'];
        $url = $data['url'];
        $icon = $data['icon'];
        $urutan = $data['urutan'];

        $query = "INSERT INTO tb_rbac_menus (nama_menu, url, icon, urutan) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        if(!$stmt){
            return false;
        }
        $stmt->bind_param("sssi", $nama, $url, $icon, $urutan);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }
}