<?php
session_start();
if(!isset($_SESSION['username'])) {
    header('location:login.php');} 
    else { 
	$welcome = "Hi ";
   $username = $_SESSION['username']; 
}
$koneksi=mysqli_connect("localhost","root","","eclooth");
$result = mysqli_query($koneksi,"SELECT * FROM pesanan WHERE Nama_Pemesan = '$_SESSION[username]'");
?>
<html lang="zxx">

<head>
    <title>Eclooth Tempatnya Sablon</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Baggage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
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
    <!-- //Fonts -->

</head>

<body>
    <div class="main-sec inner-page">
        <!-- //header -->
        <header class="py-sm-3 pt-3 pb-2" id="home">
            <div class="container">
                <!-- nav -->
                <div class="top-w3pvt d-flex">
                    <div id="logo">
                        <h1> <a href="index.php"><span class="log-w3pvt">E</span>clooth</a> <label class="sub-des">Tempatnya Sablon</label></h1>
                    </div>

                    <div class="forms ml-auto">
                        <a href="login.php" class="btn"><span class="fa fa-user-circle-o"></span> Sign In</a>
                        <a href="register.php" class="btn"><span class="fa fa-pencil-square-o"></span> Sign Up</a>
						<a href="logout.php" class="btn"><span class="fa fa-pencil-square-o"></span> Logout</a>
						<?php
						echo $welcome; 
						echo $username;
						?>
                    </div>
                </div>
                <div class="nav-top-wthree">
                    <nav>
                        <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="shop.php">Product</a></li>
                            <li><a href="contact.php">Contact</a></li>
							<li><a href="cart.php">Cart</a></li>
                        </ul>
                    </nav>
                    <!-- //nav -->
                    <div class="clearfix"></div>
                </div>
            </div>
        </header>
        <!-- //header -->

    </div>

    <!-- //banner-->
    <!--/login -->
    <section class="banner-bottom py-5">
        <div class="container">
                    <center><h2><b>Checkout</h2></b></center><br>
                   <table border="1" class="table">
				   <thead class="thead-dark">
	                    <tr>
	                    <th width="304">Design Kamu</th>
		                <th width="313">Nama Pemesan</th>
		                <th width="117">Tipe</th>
		                <th width="135">Ukuran</th>
		                <th width="127">Harga</th>
						<th width="127">Jumlah</th>
						<th width="127">Total Harga</th>
						<th width="136">Warna</th>
						<th width="136">Opsi</th>
	                    </tr>
					    <tr>
					   <?php 
                        while($user_data = mysqli_fetch_array($result)) {
	                    echo "<td><img src='foto/".$user_data['Nama']."' width='100' height='100'></td>";
	                    echo "<td>".$user_data['Nama_Pemesan']."</td>";
	                    echo "<td>".$user_data['Tipe']."</td>";
	                    echo "<td>".$user_data['Ukuran']."</td>";
	                    echo "<td>".$user_data['Harga']."</td>";
						echo "<td>".$user_data['Qty']."</td>";
						echo "<td>".$user_data['Total']."</td>";
						echo "<td>".$user_data['Warna']."</td>";
						echo "<td><a href='hapuspesanan.php?id_pesanan=$user_data[id_pesanan]'>Hapus</a></td></tr>";
                        }
                        ?>
                        </table>
        </div></div></div><br><br><br>
		<section class="banner-bottom py-5">
        <div class="container">
						<h3 class="title-wthree-single my-lg-5 my-4 text-left"><center>Isi Data Diri</center></h3>
				<form action="prosesbayar.php" method="post" enctype="multipart/form-data">
							Alamat : <br>
                            <div class="content-input-field">
                                <input name="Alamat" id="text1" type="text" placeholder="" >
                            </div>
							Pembayaran : 
                            <div class="content-input-field">
                                <select name="Pembayaran" id="myInput">
								<option value="BCA">BCA</option>
								<option value="Mandiri">Mandiri</option>
								<option value="BRI">BRI</option>
								<option value="BNI">BNI</option>
							</select>
                            </div>
							Pengiriman : 
                            <div class="content-input-field">
                                <select name="Pengiriman" id="myInput">
								<option value="JNE">JNE</option>
								<option value="Si Cepat">Si Cepat</option>
								<option value="Anteraja">Anteraja</option>
                                <option value="Anteraja">Cash On Delivery</option>
							</select>
                            </div>
							
                        <div class="content-input-field">
                            <button type="submit" class="btn" name="upload">Beli</button>
                        </div>
                    </form></center><br><br>
		</div></div>
    <!-- /login -->
    <!-- footer -->
    <div class="footer_agileinfo_topf py-5">
        <div class="container py-md-5">
            <div class="row">
                <div class="col-lg-3 footer_wthree_gridf mt-lg-5">
                    <h2><a href="index.php"><span>E</span>clooth
                        </a> </h2>
                    <label class="sub-des2">Online Store</label>
                </div>
                <div class="col-lg-3 footer_wthree_gridf mt-md-0 mt-4">
                    <ul class="footer_wthree_gridf_list">
                        <li>
                            <a href="index.php"><span class="fa fa-angle-right" aria-hidden="true"></span> Home</a>
                        </li>
                        <li>
                            <a href="contact.php"><span class="fa fa-angle-right" aria-hidden="true"></span> Contact</a>
                        </li>
						<li>
                            <a href="shop.php"><span class="fa fa-angle-right" aria-hidden="true"></span> Product</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 footer_wthree_gridf mt-md-0 mt-sm-4 mt-3">
                    <ul class="footer_wthree_gridf_list">
                        <li>
                            <a href="login.php"><span class="fa fa-angle-right" aria-hidden="true"></span> Login</a>
                        </li>

                        <li>
                            <a href="cart.php"><span class="fa fa-angle-right" aria-hidden="true"></span> Keranjang</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 footer_wthree_gridf mt-md-0 mt-sm-4 mt-3">
                    <ul class="footer_wthree_gridf_list">
                        <li>
                            <a href="register.php"><span class="fa fa-angle-right" aria-hidden="true"></span> Register </a>
                        </li>
                        <li>
                            <a href="pesanan.php"><span class="fa fa-angle-right" aria-hidden="true"></span>Pesanan Anda</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="move-top text-center mt-lg-4 mt-3">
                <a href="#home"><span class="fa fa-angle-double-up" aria-hidden="true"></span></a>
            </div>
        </div>
    </div>
    <!-- //footer -->

    <!-- copyright -->
    <div class="cpy-right text-center py-3">
        <p>© 2019 Baggage. All rights reserved
        </p>

    </div>
    <!-- //copyright -->

</body>

</html>