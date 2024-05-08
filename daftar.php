<?php 
session_start();
// koneksi DB
$koneksi = new mysqli("localhost","root","","pemweb");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>
    


<div class="container" style="margin-top: 150px; margin-left: 35%">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-tittle">
                        Daftar Akun
                    </h3>
                </div>
                <div class="panel-body">
                    <form method="post">
                    <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <button class="btn btn-primary" name="daftar">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 

if (isset($_POST['daftar']))
{
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $ambil = $koneksi->query("SELECT * FROM user WHERE email_user= '$email'");
    $yangcocok = $ambil->num_rows;
    if($yangcocok==1)
    {
        echo "<script>alert('pendaftaran gagal, email sudah digunakan');</script>";
        echo "<script>location='daftar.php';</script>";
    }
    else
    {
        $koneksi->query("INSERT INTO user(email_user,password_user,nama_user) VALUES ('$email','$password','$nama')");

        echo "<script>alert('pendaftaran sukses, silahkan login');</script>";
        echo "<script>location='login.php';</script>";
    
    }
}

?>



</body>
</html>