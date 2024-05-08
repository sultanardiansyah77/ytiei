<?php 
// mendapat id produk dari url
$id_produk = $_GET['id'];

// produk +1 jika sudah terdaftar
if (isset($_SESSION['beli'][$id_produk]))
{
    $_SESSION['beli'][$id_produk] += 1;
}
else{
    $_SESSION['beli'][$id_produk] = 1;
}

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo "<script>alert('Silahkan checkout')</script>";
echo "<script>location='checkout.php'</script>";
?>