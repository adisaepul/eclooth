<?php
   require_once ("koneksi.php");
   $Nama_Pemesan = $_POST['Nama_Pemesan'];
   $Tipe = $_POST['Tipe'];
   $Ukuran = $_POST['Ukuran'];
   $Harga = $_POST['Harga'];
   $Qty = $_POST['Qty'];
   $Warna = $_POST['Warna'];
   $nama_file = $_FILES['gambar']['name'];
   $ukuran_file = $_FILES['gambar']['size'];
   $tipe_file = $_FILES['gambar']['type'];
   $tmp_file = $_FILES['gambar']['tmp_name'];
   $Harganya = $Harga;
   $Jumlah = $Qty;
   $Total = $Harganya * $Jumlah;
   // Set path folder tempat menyimpan gambarnya
   $path = "foto/".$nama_file;
  if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :  
      // Proses simpan ke Database
      $query = "INSERT INTO penjualan(Nama_Pemesan,Tipe,Ukuran,Harga,Qty,Warna,Nama,Size,Format,Total) VALUES('".$Nama_Pemesan."','".$Tipe."','".$Ukuran."','".$Harga."','".$Qty."','".$Warna."','".$nama_file."','".$ukuran_file."','".$tipe_file."','".$Total."')";
      $sql = mysqli_query($db, $query); // Eksekusi/ Jalankan query dari variabel $query
      header('location:index.php');
      
    //   if ($sql) { // Cek jika proses simpan ke database sukses atau tidak
    //     // Jika Sukses, Lakukan :
    //     header('location:index.php');
    //   }else{
    //     // Jika Gagal, Lakukan :
    //     echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    //     echo "<br><a href='shop.php'>Kembali Ke Form</a>";
    //   }
    // }else{
    //   // Jika gambar gagal diupload, Lakukan :
    //   echo "Maaf, Gambar gagal untuk diupload.";
    //   echo "<br><a href='shop.php'>Kembali Ke Form</a>";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
    echo "<br><a href='shop.php'>Kembali Ke Form</a>";
  }
?>