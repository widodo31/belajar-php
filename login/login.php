<?php
session_start();
if(isset($_SESSION['name'])){
    header("Location: index.php");
}
include_once 'proses.php';
$proses = new Proses();


if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $getEmail = $proses->getEmail($email);
    $pass = $proses->cekPassword($email, $password);

    if(isset($_POST['submit'])){
        if(empty($email) or empty($password)){
            echo "<script>alert('Email dan password tidak boleh kosong');</script>";
        }else{
            if($getEmail === false){
                echo "<script>alert('Email Belum terdaftar');</script>";
            }else{
                if($pass === true){
                   $_SESSION['name'] = $getEmail['name'];
                   $_SESSION['email'] = $getEmail['email'];
                   header("Location: index.php");
                }elseif($pass === false){
                    echo "<script>alert('Password anda Salah');</script>";
                }
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <section class="container-fluid mb-4">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-4">
                <form action="login.php" method="post" class="form-container">
                    <h4 class="text-center font-weight-bold">Sign In</h4>
                    <div class="form-group">
                        <label for="usernam">Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="masukkan email disini">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password disini">
                    </div>
                    <button type="submit" class="btn btn-promary btn-block" name="submit">Sign In</button>

                    <div class="form-footer mt-2">
                        <p>Belum Punya Acount? <a href="register.php">register</a></p>
                    </div>
                </form>
            </section>
        </section>
    </section>
    
<!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan  yang terakhit Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>