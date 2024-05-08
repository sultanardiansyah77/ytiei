<?php 
session_start();
$koneksi = new mysqli("localhost","root","","pemweb");

$id_produk = $_GET['id'];

if (!isset($_SESSION["user"]))
{
    echo "<script>alert('anda harus login terlebih dahulu');</script>";
    echo "<script>location='login.php';</script>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTA</title>
    <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>
    <section class="konten">
        <div class="container">
            <h1>Nota Pembelian</h1>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Jumlah Item</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'"); ?>
                    <?php while($pecah = $ambil->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $pecah['nama_produk']; ?></td>
                        <td><?php echo $pecah['nominal_produk']; ?></td>
                        <td>Rp. <?php echo number_format($pecah['harga_produk']); ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

            <div class="row">
                <div class="col-md-5">
                    <div class="aler alert-info">
                    <?php $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'"); ?>
                    <?php while($pecah = $ambil->fetch_assoc()) { ?>
                        <p class="alert alert-info">
                            Silahkan melakukan pembayaran sebesar Rp. <?php echo number_format($pecah['harga_produk'])?> Ke <br>
                            <strong> BANK BRI 6417-01-031696-53-2 A/N. Yoga Dwi Nugroho </strong> <br>
                            <strong> DANA 085233222431 A/N. Yoga Dwi Nugroho</strong><br>
                            <strong> SHOPEE 085233222431 A/N. Yoga Dwi Nugroho</strong> <br>
                            <strong> OVO 085233222431 A/N. Yoga Dwi Nugroho</strong>
                        </p>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>ID Game</label>
                    <input type="text" name="idgame" class="form-control">
                </div>
                <div class="form-group">
                    <label>Bukti Pembayaran</label>
                    <input type="file" class="form-control" name="bukti">
                </div>
                <button class="btn btn-primary" name="kirim">Kirim</button>
            </form>
            <br>

            <?php 
            
            if (isset($_POST['kirim']))
            {
                $nama = $_FILES['bukti']['name'];
                $lokasi = $_FILES['bukti']['tmp_name'];
                move_uploaded_file($lokasi, "C:/xampp/htdocs/NTSSHOP/bukti/".$nama);
                $koneksi->query("INSERT INTO bukti (id_game, bukti_pembayaran) VALUES ('$_POST[idgame]','$nama')");
            }
            echo "<div class='alert alert-info'>Terimakasih Telah Membeli di NTS Shop, Mohon Tunggu Sebentar Transaksi Akan Segera Kami Proses</div>" ;
            ?>
            <a href="index.php" class="btn btn-warning">Kembali</a>
        </div>
    </section>
</body>
</html>