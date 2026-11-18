<?php
require_once '../crud-mahasiswa/config/db-config.php';
class Menu{
    public function getMenuTree(){
        global $conn;
        $sql = "SELECT id, parent_id, nama_menu, url, icon, urutan FROM tb_rbac_menus
                    WHERE is_active = 1
                    ORDER BY urutan ASC";
        $result = mysqli_query($conn, $sql);
        if(!$result){
            return[];
        }

        // Mengambil seluruh data menu
        while($row = mysqli_fetch_assoc($result)){
            $row['children'] = [];
            $items[$row['id']] = $row;
        }

        // Membentuk struktur menu bertingkat
        $tree = [];
        foreach($items as $id=> &$item){
            if(
                $item['parent_id'] !== null && isset($item($item['parent_id']))
            ){
                $item[$item['parent_id']]['cildren'][] = &$item;
            }else{
                $tree[] = &$item;
            }
        }
        unset($item);
        return $tree;
    }
}