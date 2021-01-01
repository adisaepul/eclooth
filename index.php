<?php
session_start();
if(!isset($_SESSION['username'])) {
    $username = "Anda Belum Login";
	$welcome = "";} 
    else { 
	$welcome = "Hi ";
   $username = $_SESSION['username']; 
}
?>
<html lang="zxx">

<head>
    <title>Eclooth Let's Make Something Different</title>
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
    <div class="main-sec">
        <!-- //header -->
        <header class="py-sm-3 pt-3 pb-2" id="home">
            <div class="container">
                <!-- nav -->
                <div class="top-w3pvt d-flex">
                    <div id="logo">
                        <h1> <a href="index.php"><span class="log-w3pvt">E</span>clooth</a> <label class="sub-des">Let's Make Something Different</label></h1>
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
        <!--/banner-->
        <div class="banner-wthree-info container">
            <div class="row">
                <div class="col-lg-5 banner-left-info">
                    <img src = "images/eclooth.png" width="450" height="200">
                    <a href="shop.php" class="btn shop">Beli Sekarang</a>
                </div>
            </div>
        </div>
    </div>

    <!-- //banner-->
    <!--/banner-bottom -->
    <section class="banner-bottom py-5">
        <div class="container py-md-3">
            <div class="row grids-wthree-info text-center">
                <div class="col-lg-4 ab-content">
                    <div class="ab-info-con">
                        <h4>Bisa Beli Satuan & Grosir</h4>
                        <p>Buat produk dengan design kamu sendiri tanpa minimum order! Eclooth melayani pembelian satuan.</p>
                    </div>
                </div>
                <div class="col-lg-4 ab-content">
                    <div class="ab-info-con">
                        <h4>Harga Murah</h4>
                        <p>Dengan Eclooth, anda bisa membuat produk dengan design anda sendiri dengan harga yang sangat terjangkau</p>
                    </div>
                </div>
                <div class="col-lg-4 ab-content">
                    <div class="ab-info-con">
                        <h4>Dijamin Puas</h4>
                        <p>Kalau barang yang anda terima dalam keadaan rusak atau tidak layak pakai, Eclooth melayani refund, garansi uang kembali.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /banner-bottom -->
    <!--/collections -->
    <section class="banner-bottom py-5">
        <div class="container py-md-5">

            <h3 class="title-wthree mb-lg-5 mb-4 text-center">Produk Eclooth</h3>
            <div class="row text-center">


                <div class="col-md-4 content-gd-wthree">
                    <img src="images/c1.jpg" class="img-fluid" alt="" />
                </div>
                <div class="col-md-4 content-gd-wthree ab-content py-lg-5 my-lg-5">
                    <h4>Produk Custom</h4>
                    <p>Eclooth menyediakan produk custom dengan kualitas terbaik. Produk custom Eclooth sangat cocok untuk kamu pakai sendiri, untuk jualan, dan untuk kebutuhan komunitas serta perusahaan.</p>
                    <a href="shop.php" class="btn shop mt-3">Beli Sekarang</a>

                </div>
                <div class="col-md-4 content-gd-wthree">
                    <img src="images/c2.jpg" class="img-fluid" alt="" />
                </div>
            </div>

        </div>
    </section>
    <!-- //collections-->
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
