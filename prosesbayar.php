<?php
   require_once("koneksi.php");
   session_start();
   if(!isset($_SESSION['username'])) {
    header('location:login.php');} 
    else { 
	$welcome = "Hi ";
   $username = $_SESSION['username']; 
}	
   $Alamat = $_POST['Alamat'];
   $Pembayaran = $_POST['Pembayaran'];
   $Pengiriman = $_POST['Pengiriman'];
   
       $data = mysqli_query($db, "UPDATE pesanan SET Alamat='$Alamat', Pembayaran='$Pembayaran', Pengiriman='$Pengiriman' WHERE Nama_Pemesan = '$_SESSION[username]'");
	   echo "<div align='center'>Pesanan Berhasil Dibuat, Silahkan Tunggu Pesanan Anda Sampai Ke Rumah, Terima Kasih <a href='pesanan.php'>Kembali</a></div>";
?>