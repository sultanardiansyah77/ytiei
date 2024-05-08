<h2>TAMBAH PRODUK</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">
            Nama
        </label>
        <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <label for="">
            Harga (Rp)
        </label>
        <input type="number" class="form-control" name="harga">
    </div>
    <div class="form-group">
        <label for="">
            Nominal
        </label>
        <input type="number" class="form-control" name="nominal">
    </div>
    <div class="form-group">
        <label for="">
            Deskripsi
        </label>
        <textarea class="form-control" name="deskripsi" rows="10"></textarea>
    </div>
    <button class="btn btn-primary" name="save">Simpan</button>
</form>

<?php 
if (isset($_POST['save']))
{
    $koneksi->query("INSERT INTO produk (nama_produk, harga_produk, nominal_produk, deskripsi_produk) VALUES('$_POST[nama]','$_POST[harga]','$_POST[nominal]','$_POST[deskripsi]')");

    echo "<div class='alert alert-info'>Data Tersimpan</div>" ;
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";
}
?>
