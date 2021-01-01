<?php
$koneksi=mysqli_connect("localhost","root","","eclooth");
?>
<?php 
if (isset($_POST['submit'])) {
 $bln = date($_POST['bulan']);

 if (!empty($bln)) {
  // perintah tampil data berdasarkan periode bulan
  $sql = mysqli_query($koneksi, "SELECT * FROM penjualan WHERE MONTH(waktu) = '$bln'");
 } else {
  // perintah tampil semua data
  $sql = mysqli_query($koneksi, "SELECT * FROM penjualan p");
 }
} else {
 // perintah tampil semua data
 $sql = mysqli_query($koneksi, "SELECT * FROM penjualan");
}

// hitung jumlah baris data
$baris = $sql->num_rows;

?>

<!DOCTYPE html>
<html>
<head>
 <title>E-cloth</title>
 <!-- Bootstrap -->
 <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
</head>
<body>
 
 <div class="container mt-5">
  <center>
   <h1>Rekapitulasi penjualan</h1>
  </center>

  <div class="card col-md-8 mx-auto mt-3">
   <div class="card-body">
    <div class="row">
     <div class="col-md-4 pt-2">
      <span>Jumlah Barang: <b><?= $baris ?></b></span>
     </div>
     <div class="col-md-8">
      <form method="POST" action="" class="form-inline">
       <label for="date1">Tampilkan transaksi bulan :</label>
       <select class="form-control mr-2" name="bulan">
        <option value="">-</option>
        <option value="1">Januari</option>
        <option value="2">Februari</option>
        <option value="3">Maret</option>
        <option value="4">April</option>
        <option value="5">Mei</option>
        <option value="6">Juni</option>
        <option value="7">Juli</option>
        <option value="8">Agustus</option>
        <option value="9">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>
       </select>
       <button type="submit" name="submit" class="btn btn-primary">Tampilkan</button>
      </form>
     </div>
    </div>

    <div class="mt-3" style="max-height: 340px; overflow-y: auto;">
     <table class="table table-bordered">
      <tr>
       <th>#</th>
       <th>Nama Barang</th>
       <th>Harga Satuan</th>
       <th>Qty</th>
       <th>Tgl. Transaksi</th>
      </tr>

      <?php
      
      $no = 1;
      while ($result = $sql->fetch_assoc()) {
      ?>

      <tr>
       <td><?= $no++ ?></td>
       <td><?= ucwords($result['Tipe']) ?></td>
       <td><?= $result['Harga'] ?></td>
       <td><?= $result['Qty'] ?></td>
       <td><?= date('d-M-Y', strtotime($result['waktu'])) ?></td>
      </tr>
  
      <?php   
      }
      ?>

     </table>
    </div>
   </div>
  </div>
 </div>

</body>
</html>