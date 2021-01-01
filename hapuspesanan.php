<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id_pesanan = $_GET['id_pesanan'];


// menghapus data dari database
mysqli_query($db,"delete from pesanan where id_pesanan='$id_pesanan'");

// mengalihkan halaman kembali ke index.php
header("location:cart.php");

?>