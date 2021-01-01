<?php
session_start();
if(!isset($_SESSION['username'])) {
    header('location:login.php');} 
    else { 
	$welcome = "Hi ";
   $username = $_SESSION['username']; 
}
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
    <!--/banner-bottom -->
    <section class="banner-bottom py-5">
        <div class="container py-md-5">
            <!-- product right -->
            <div class="left-ads-display wthree">
                <div class="row">
                    <div class="desc1-left col-md-6">
                        <img src="images/Kaos Panjang.png" class="img-fluid" alt="">
                    </div>
                    <div class="desc1-right col-md-6 pl-lg-3">
                        <h3>Kaos Lengan Panjang</h3>
                        <h5>Rp 80.0000</h5>
                        <div class="available mt-3">
                            <p>
<b>Kaos New States Apparel (Import)</b><br><br>
Bahan katun dengan serat halus, pola standard Asia tanpa jahitan samping (Built Up), nyaman dipakai, jahitan rantai pada bagian pundak. Kaos NSA menyediakan dua pilihan bahan:<br><br>

<b>Soft Tees - Ketebalan 30s, bahan kaos lebih tipis</b><br>
<b>Premium Cotton - Ketebalan 24s, bahan kaos cukup tebal (ketebalan diantara 20s dan 30s)</b><br><br>
<b>Proses Pembuatan Kaos</b><br>
<b>Print DTG dengan NeoPigment</b><br>
Porinto menggunakan proses print DTG dengan tinta NeoPigment. Proses ini membuat membuat warna jelas, tidak mengelotok, dan sangat awet.</p>
                        </div>
                    </div>


                </div>

                    <h3 class="title-wthree-single my-lg-5 my-4 text-left">Size Chart</h3>
					<p><img src="images/sizekaos.png" width="700" height="400"></p>
                    
                </div>


                <!--/row-->
                <h3 class="title-wthree-single my-lg-5 my-4 text-left">Order Here</h3>
				<form action="prosesbeli.php" method="post" enctype="multipart/form-data">
							Nama Pemesan : <br>
                            <div class="content-input-field">
                                <input name="Nama_Pemesan" id="text1" type="text" value="<?php echo $username;?>" readonly>
                            </div>
							Tipe : 
                            <div class="content-input-field">
                                <input name="Tipe" id="myInput" value="Kaos Lengan Panjang" readonly>
                            </div>
							Ukuran : 
                            <div class="content-input-field">
                                <select name="Ukuran" id="myInput">
								<option value="XS">XS</option>
								<option value="S">S</option>
								<option value="M">M</option>
								<option value="L">L</option>
								<option value="XL">XL</option>
								<option value="XL">XXL</option>
								<option value="3XL">3XL</option>
								<option value="4XL">4XL</option>
							</select>
                            </div>
							Harga : 
                            <div class="content-input-field">
                                <input name="Harga" id="myInput" value="80000" readonly>
                            </div>
							Jumlah : 
                            <div class="content-input-field">
                                <input name="Qty" id="myInput">
                            </div>
							Warna : 
                            <div class="content-input-field">
                                <select name="Warna" id="myInput">
								<option value="Hitam">Hitam</option>
								<option value="Merah">Merah</option>
								<option value="Kuning">Kuning</option>
								<option value="Hijau">Hijau</option>
								<option value="Biru">Biru</option>
							</select>
                            </div>
							Upload Design Sablon : 
                            <div class="content-input-field">
                                <input type="file" name="gambar">
                            </div>
                        <div class="content-input-field">
                            <button type="submit" class="btn" name="upload">Beli</button>
                        </div>
                    </form><br>
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
                            <a href="#"><span class="fa fa-angle-right" aria-hidden="true"></span> Keranjang</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 footer_wthree_gridf mt-md-0 mt-sm-4 mt-3">
                    <ul class="footer_wthree_gridf_list">
                        <li>
                            <a href="register.php"><span class="fa fa-angle-right" aria-hidden="true"></span> Register </a>
                        </li>
                        <li>
                            <a href="#"><span class="fa fa-angle-right" aria-hidden="true"></span>Pesanan Anda</a>
                        </li>

                    </ul>
                </div>
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
