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
    <title>Login</title>
    <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>
    


<div class="container" style="margin-top: 150px; margin-left: 35%">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-tittle">
                        Login
                    </h3>
                </div>
                <div class="panel-body">
                    <form method="post">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <button class="btn btn-primary" name="login">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="margin-left: 37%;">
    <h5>Belum mempunyai akun?</h5> <br>
    <a href="daftar.php" class="btn btn-danger">Daftar</a>
</div>

<?php 

if (isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $ambil = $koneksi->query("SELECT * FROM user WHERE email_user='$email' AND password_user='$password'");

    $akuncocok = $ambil->num_rows;

    if ($akuncocok==1)
    {
        $akun = $ambil->fetch_assoc();
        $_SESSION["user"] = $akun;
        echo "<script>alert('Login sukses');</script>";
        echo "<script>location='index.php';</script>";
    }
    else
    {
        echo "<script>alert('Login gagal, periksa akun anda');</script>";
        echo "<script>location='login.php';</script>";
    }
}

?>



</body>
</html>