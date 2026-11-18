<?php
include_once 'proses.php';
if(isset($_POST['submit'])){
    $dataReg = [
        'nama' => $_POST['nama'],
        'email' => $_POST['email'],
        'username' => $_POST['username'],
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
    ];
    $proses = new Proses();
    $proses->register($dataReg);
    echo "
        <script>alert('Registrasi Akun berhasil di daftarkan');</script>
    ";
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
                <form action="register.php" method="post" class="form-container">
                    <h4 class="text-center font-weight-bold">Sign Up</h4>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama anda">
                    </div>
                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan alamat email anda">
                    </div>
                    <div class="form-group">
                        <label for="username">Usernam</label>
                        <input type="text" name="username" id="username" placeholder="Masukkan username anda" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="masukkan password anda" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="repassword">Re-Password</label>
                        <input type="password" name="repassword" id="repassword" placeholder="Ulangi password anda" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>
                    <div class="form-footer mt-2">
                        <p>Sudah punya account? <a href="login.php">Login</a></p>
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