<?php
    require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nama" placeholder="nama" required><br>
        <input type="email" name="email" placeholder="email" required><br>
        <textarea name="address" rows="10" placeholder="address" required></textarea><br>
        <input type="submit" value="Simpan" name="btn">
    </form>
    <br>
    
    <?php
        $sql = "SELECT * FROM coba";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
    ?>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = $result->fetch_assoc()){
                ?>
                <tr>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["email"] ?></td>
                    <td><?= $row["alamat"] ?></td>
                    <td>
                        <a href="edit.php?<?= md5("id") ?>=<?= base64_encode($row["id"]); ?>">Edit</a>
                        <a href="hapus.php?<?= md5("id") ?>=<?php base64_encode($row["id"]); ?>">Hapus</a>
                    </td>
                </tr>
                <?php
                    } //Penutuo While
                
        } // Penutup IF 
        else{ ?>
        <h1>Data Kosong</h1>
            </tbody>
        </table>
        <?php
            } //Penutup Else
        if(isset($_POST['btn'])){
            $pre = $conn->prepare("INSERT INTO coba (nama, email, alamat) VALUES (?, ?, ?)");
            $pre->bind_param("sss", $nama, $email, $alamat);
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $alamat = $_POST['address'];
            $pre->execute();
            echo "Sukses";
            echo "<meta http-equiv='refresh' content='1;url=insert.php>";

            $pre->close();
            $conn->close();
        }
        ?>
</body>
</html>