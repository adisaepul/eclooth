<?php
 session_start();
//  $id_pesanan = $_GET['id_pesanan'];
 $koneksi=mysqli_connect("localhost","root","","eclooth");
//  $result = mysqli_query($koneksi,"SELECT * FROM penjualan ");//WHERE id_pesanan = $id_pesanan

?>


<!DOCTYPE html>
 <head>
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
  <style type="text/css">
  body{background:#efefef;font-family:arial;}
  #wrapshopcart{width:70%;margin:3em auto;padding:30px;background:#fff;box-shadow:0 0 15px #ddd;}
  h1{margin:0;padding:0;font-size:2.5em;font-weight:bold;}
  p{font-size:1em;margin:0;}
  table{margin:2em 0 0 0; border:1px solid #eee;width:100%; border-collapse: separate;border-spacing:0;}
  table th{background:#fafafa; border:none; padding:20px ; font-weight:normal;text-align:left;}
  table td{background:#fff; border:none; padding:12px  20px; font-weight:normal;text-align:left; border-top:1px solid #eee;}
  table tr.total td{font-size:1.5em;}
  .btnsubmit{display:inline-block;padding:10px;border:1px solid #ddd;background:#eee;color:#000;text-decoration:none;margin:2em 0;}
  form{margin:2em 0 0 0;}
  label{display:inline-block;width:auto;}
  input[type=text]{border:1px solid #bbb;padding:10px;width:30em;}
  textarea{border:1px solid #bbb;padding:10px;width:30em;height:5em;vertical-align:text-top;margin:0.3em 0 0 0;}
  .submitbtn{font-size:1.5em;display:inline-block;padding:10px;border:1px solid #ddd;background:#eee;color:#000;text-decoration:none;margin:0.5em 0 0 8em;};
  img {
  display: block;
  margin-right: 100;
}
  </style>
 </head>
 
 <body>
  <div id="wrapshopcart">
   <h1>Penjualan</h1><br>
      <?php    
      if (isset($_POST['submit'])) {
        $bln = date($_POST['bulan']);
        if(!empty($bln)){
        $q = mysqli_query($koneksi, "SELECT * FROM penjualan WHERE MONTH(waktu)= '$bln'");
        }else{
          //tampil semua data
          $q = mysqli_query($koneksi, "SELECT * FROM penjulan");
        }
      }else{
        $q = mysqli_query($koneksi, "SELECT * FROM penjualan");
      }
      // hitung jumlah baris data
      $s = $q -> num_rows;
      //   //menampilkan data perbulan
      //   $bulan = $_POST['bulan'];
      //   $sql = mysqli_query ($koneksi, "SELECT * FROM penjualan WHERE month(waktu)='$bulan' ");

      // }
      // if (isset($_POST['submit' && 'tahun'])){
      //   //menampilkan data pertahun
      //   $tahun= $_POST['tahun'];
      //   $sql = mysqli_query($koneksi, "SELECT * FROM penjualan WHERE year(waktu)='$tahun' ");
      // }
      // if (isset($_POST[ 'bulan' && 'tahun' ])){
      // //menampilkan data bulan dan tahun
      //   // $bulan = $_POST['bulan'];
      //   // $tahun = $_POST['tahun'];
      //   // $sql = "SELECT * FROM penjualan WHERE month(waktu)='$bulan' and year(waktu) = '$tahun'";
      // }

      ?>
      Bulan
      <select name="bulan">
      <option value="01">Januari</option>
      <option value="02">Februari</option>
      <option value="03">Maret</option>
      <option value="04">April</option>
      <option value="05">Mei</option>
      <option value="06">Juni</option>
      <option value="07">Juli</option>
      <option value="08">Agustus</option>
      <option value="09">September</option>
      <option value="10">Oktober</option>
      <option value="12">November</option>
      <option value="12">Desember</option>
      </select>
      <!-- Tahun
      <select name="tahun">;
      <?php
      //perulangan 5 tahun ke belakang
      // $mulai= date('Y') - 5;
      // for($i = $mulai;$i<$mulai + 6;$i++){
      //     $sel = $i == date('Y') ? ' selected="selected"' : '';
      //     echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
      // }
      
      // $qry=mysqli_query($koneksi, "SELECT waktu FROM penjualan GROUP BY year(waktu)");
      // while($t=mysqli_Fetch_array($qry)){
      //     $data = explode('-',$t['tanggal']);
      //     $tahun = $data[0];
      //     echo "<option value='$tahun'>$tahun</option>";
      //   }
      
      ?>
      </select> -->
     
   <!-- <p>Silahkan save halaman ini ... </p> -->
   <table border="1" class="table">
                   <thead class="thead-dark">
                        <tr>
                        <th width="313">Tanggal</th>
                        <th width="313">Nama Pemesan</th>
                        <th width="117">Tipe</th>
                        <th width="135">Ukuran</th>
                        <th width="127">Harga</th>
                        <th width="127">Jumlah</th>
                        <th width="127">Total Harga</th>
                        <!-- <th width="136">Warna</th> -->
                        
                        </tr>
                      <tr>
                        <?php 
                          while($r = $q->fetch_assoc()) {
                          echo "<td>".date('d-M-Y', strtotime($r['waktu']))."</td>";
                          echo "<td>".$r['Nama_Pemesan']."</td>";
                          echo "<td>".$r['Tipe']."</td>";
                          echo "<td>".$r['Size']."</td>";
                          echo "<td>".$r['Harga']."</td>";
                          echo "<td>".$r['Qty']."</td>";
                          echo "<td>".$r['Total']."</td>";
                          // echo "<td>".$r['Warna']."</td>";
                          }
                        ?>
                      </tr>
                      <!-- </table>&nbsp;<br><img src="images/paid.png" width="320" height="150" align="right">&nbsp;<br>Kembali Ke Pesanan, <a href="pesanan.php" >Kembali</a><br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br> -->
  </div>
  <button type="submit" name="submit" value="tampilkan" class="btn btn-secondary sm">Tampil</button>
</body>
</html>