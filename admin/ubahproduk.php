<h2>UBAH PRODUK</h2>

<?php  

$ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">
            Nama
        </label>
        <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_produk'];?>">
    </div>
    <div class="form-group">
        <label for="">
            Harga (Rp)
        </label>
        <input type="number" class="form-control" name="harga" value="<?php echo $pecah['harga_produk'];?>">
    </div>
    <div class="form-group">
        <label for="">
            Nominal
        </label>
        <input type="number" class="form-control" name="nominal" value="<?php echo $pecah['nominal_produk'];?>">
    </div>
    <div class="form-group">
        <label for="">
            Deskripsi
        </label>
        <textarea class="form-control" name="deskripsi" rows="10">
            <?php echo $pecah['deskripsi_produk']; ?>
        </textarea>
    </div>
    <button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php 
if (isset($_POST['ubah']))
{
    $koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',harga_produk='$_POST[harga]',nominal_produk='$_POST[nominal]',deskripsi_produk='$_POST[deskripsi]' WHERE id_produk='$_GET[id]'");

    echo "<script>alert('data telah diubah');</script>";
    echo "<script>location='index.php?halaman=produk';</script>";
}
?>