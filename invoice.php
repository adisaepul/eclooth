<?php
 session_start();
 $id_pesanan = $_GET['id_pesanan'];
 $koneksi=mysqli_connect("localhost","root","","eclooth");
 $result = mysqli_query($koneksi,"SELECT * FROM pesanan WHERE id_pesanan = $id_pesanan");
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
   <h1>Invoice Eclooth</h1><br>
   <p>Silahkan save halaman ini ... </p>
   <table border="1" class="table">
				   <thead class="thead-dark">
	                    <tr>
		                <th width="313">Nama Pemesan</th>
		                <th width="117">Tipe</th>
		                <th width="135">Ukuran</th>
		                <th width="127">Harga</th>
						<th width="127">Jumlah</th>
						<th width="127">Total Harga</th>
						<th width="136">Warna</th>
						<th width="136">Pembayaran</th>
	                    </tr>
					    <tr>
					   <?php 
                        while($user_data = mysqli_fetch_array($result)) {
	                    echo "<td>".$user_data['Nama_Pemesan']."</td>";
	                    echo "<td>".$user_data['Tipe']."</td>";
	                    echo "<td>".$user_data['Ukuran']."</td>";
	                    echo "<td>".$user_data['Harga']."</td>";
						echo "<td>".$user_data['Qty']."</td>";
						echo "<td>".$user_data['Total']."</td>";
						echo "<td>".$user_data['Warna']."</td>";
						echo "<td>".$user_data['Pembayaran']."</td>";
                        }
						?></table>&nbsp;<br><img src="images/paid.png" width="320" height="150" align="right">&nbsp;<br>Kembali Ke Pesanan, <a href="pesanan.php" >Kembali</a><br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>
  </div></body>
</html>