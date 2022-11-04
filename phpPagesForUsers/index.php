<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../login/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: ../login/login.php");
  }
  $db = mysqli_connect('localhost', 'root', '', 'project');
  $user=$_SESSION['username'];
  $admin='admin'; 
  $user_check_query = "SELECT * FROM users WHERE username='$user' AND role='$admin'";
  $result = mysqli_query($db, $user_check_query);
  $role = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <!--pt a potrivi cand micsorez ecranul-->
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title>Intuitive Photography Shop </title>
    <!--creez legatura cu fisierul style.css-->
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="icon" href="images/logo.ico">
</head>

<body>


    <div class="header">
        <div class="container">
            <div class="NavigationBar">
                <div class="logo">
                    <a href="index.php">
                        <img src="images/logo.png" width="125px">
                    </a>
                    <!--logo-->
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="products1.php">Products</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="account.php">Accont</a></li>
                    </ul>
                </nav>
                <a href="cart.php"><img src="images/cart.png" width="30px" height="30px" alt="Error open imagine"></a>
                <img src="images/menu.png" class="menu-icon" alt="Error open imagine" onclick="menutoggle()">
            </div>
        </div>


        <div class="content">
            <!-- notification message -->
            <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success">
                <h3>
                    <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
                ?>
                </h3>
            </div>
            <?php endif ?>

            <!-- logged in user information -->
            <?php  if (isset($_SESSION['username'])) : ?>
            <p style="padding-left: 25px;" >Bine ai venit, <strong>
                    <?php echo $_SESSION['username']; ?>
                </strong>! Să ai o zi bună!</p>
            <ps style="padding-left: 25px;"> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
            <?php endif ?>
            <br>
            <br>
            
            
            <p align="left" style="padding-left: 25px;">
                <a style="padding-left: 25px;" class="btn" id="btnsmecher" href="../ProposeImage/admin_page.php"> Propose an image &#10024;</a>
            </p>


            <p align="right" style="padding-right: 100px;">
                <a class="btn" id="btnsmecher" href="../CommunityChat/index.php"> Community Chat &#128172;</a>
            </p>


            <!-- <audio controls>
                <source src="horse.ogg" type="audio/ogg">
                <source src="horse.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio> -->


        </div>


        <div class="row">
            <div class="col-2">
                <h1 style="padding:40px;">Nu faci o fotografie, o creezi!<br> Carpe diem!</h1>
                <p></p>
                <!--pe viitor-->
                <a class="btn" id="btnsmecher" onClick="scrollWin(0,1000)">Explore Now &#10164;</a>


            </div>
            <div class="col-2">
                <img src="images/image1.png" alt="Image1 dont work">
            </div>
        </div>

    </div>

    <!--featured categoried-->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images/category-1.jpg">
                </div>
                <div class="col-3">
                    <img src="images/category-2.jpg">
                </div>
                <div class="col-3">
                    <img src="images/category-3.jpg">
                </div>
            </div>
        </div>
    </div>

    <!--featured products-->
    <div class="small-container">

        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="products-details.php"><img src="images/product-1.jpg" id="Referinta1" onclick="passvalues(1)"
                        alt="Error open image product1"></a>

                <h4 id="Referinta1title" onclick="passvalues(1)">Phineas & Ferb</h4>

                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="products-details.php"><img src="images/product-2.jpg" id="Referinta2" onclick="passvalues(2)"
                        alt="Error open image product-2"></a>
                <h4 id="Referinta2title">Grapes</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="products-details.php"><img src="images/product-3.jpg" id="Referinta3" onclick="passvalues(3)"
                        alt="Error open image product-3"></a>
                <h4 id="Referinta3title">Flowers</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="products-details.php"><img src="images/product-4.jpg" id="Referinta4" onclick="passvalues(4)"
                        alt="Error open image product-4"></a>
                <h4 id="Referinta4title">Spring</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
        </div>

        <!--latest products-->
        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="products-details.php"><img src="images/product-5.jpg" id="Referinta5" onclick="passvalues(5)"
                        alt="Error open image product-5"></a>
                <h4 id="Referinta5title">Winter</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="products-details.php"><img src="images/product-6.jpg" id="Referinta6" onclick="passvalues(6)"
                        alt="Error open image product-6"></a>
                <h4 id="Referinta6title">My apple</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="products-details.php"><img src="images/product-7.jpg" id="Referinta7" onclick="passvalues(7)"
                        alt="Error open image product-7"></a>
                <h4 id="Referinta7title">Duck</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="products-details.php"><img src="images/product-8.jpg" id="Referinta8" onclick="passvalues(8)"
                        alt="Error open image product-8"></a>
                <h4 id="Referinta8title">Jimmy</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <a href="products-details.php"><img src="images/product-9.jpg" id="Referinta9" onclick="passvalues(9)"
                        alt="Error open image product-9"></a>
                <h4 id="Referinta9title">Bicycles2</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="products-details.php"><img src="images/product-10.jpg" id="Referinta10"
                        onclick="passvalues(10)" alt="Error open image product-10"></a>
                <h4 id="Referinta10title">My Old Desktop</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="products-details.php"><img src="images/product-11.jpg" id="Referinta11"
                        onclick="passvalues(11)" alt="Error open image product-11"></a>
                <h4 id="Referinta11title">View</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="products-details.php"><img src="images/product-12.jpg" id="Referinta12"
                        onclick="passvalues(12)" alt="Error open image product-12"></a>
                <h4 id="Referinta12title">To remember</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
        </div>

    </div>




    <!--Offer-->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/exclusive.png" class="offer-img" alt="Error exclusive.png">
                </div>
                <div class="col-2">
                    <p>Exclusively Available on IPS</p>
                    <h1>Bratara fitness OPPO Band </h1>

                    <small> MENTINE-TI SANATATEA ACTIVA</small>
                    <a class="btn" onclick="myAlert('Have a good day! This is only front-end.')">Buy Now &#8594;</a>
                    <!--&#8594 sageata-->
                </div>
            </div>
        </div>
    </div>

    <!--testimonial-->
    <div class="testimonial">
        <div class="small-container">
            <div class="r">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Per Aspera Ad Astra</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/user-1.png" alt="error user-1.png">
                    <h3>Radu</h3>
                </div>
            </div>
        </div>
    </div>

    <h2 class="title">Sponsors</h2>
    <!--Brands-->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <a href="https://www.godrej.com">
                        <img src="images/logo-godrej.png" alt="">
                    </a>
                </div>
                <div class="col-5">
                    <a href="https://www.coca-cola.ro">
                        <img src="images/logo-coca-cola.png" alt="">
                    </a>
                </div>
                <div class="col-5">
                    <a href="https://www.oppo.com/ro/">
                        <img src="images/logo-oppo.png" alt="">
                    </a>
                </div>
                <div class="col-5">
                    <a href="https://www.paypal.com/ro/home">
                        <img src="images/logo-paypal.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--footer-->

    <div class="footer">
        <div class="contain">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App.</h3>
                    <div class="app-logo">
                        <a href="https://play.google.com/store/apps/details?id=com.duolingo&gl=RO"><img
                                src="images/play-store.png" alt="error img"></a>
                        <a href="https://www.apple.com/app-store/"><img src="images/app-store.png" alt="error img"></a>
                    </div>
                </div>
                <div class="footer-col-2">
                    <!-- <img src="" alt="error">-->
                    <p>Fotografia aduce ordine în haos.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li><a style="color:rgb(255, 0, 221)" href="https://www.konkurs.ro">Cupons</a></li>
                        <li><a style="color:rgb(255, 136, 0)" href="https://blogfin25.blogspot.com">Blog Spot</a></li>
                        <li><a style="color:rgb(255, 255, 255)"
                                href="https://en.wikipedia.org/wiki/Product_return">Return Policy</a></li>
                        <li><a style="color:rgb(197, 244, 9)"
                                href="https://www.bani-online.ro/ghidul-complet-pentru-amazon-affiliate-program-in-romania/">Join
                                Affiliate</a></li>
                    </ul>
                </div>

                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a style="color:rgb(62, 3, 239)" href="https://www.facebook.com">Facebook</a></li>
                        <li><a style="color:rgb(0, 153, 255)" href="https://twitter.com/tweeter">Twitter</a></li>
                        <li><a style="color:rgb(218, 9, 141)" href="https://www.instagram.com">Instagram</a></li>
                        <li><a style="color:rgb(255, 0, 0)"
                                href="https://www.youtube.com/watch?v=p1GQ-aVX4GM&ab_channel=SaraBănățană">Youtube</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="learn"> <a style="color:rgb(31, 108, 63)"
                    href="https://wiki.mta.ro/c/3/tw/start">TehnologiiWeb2022</a> </p>

        </div>
    </div>
    <!--aici plasez eticheta de script-->
    <script src="myscript.js"></script>

</body>

</html> -->