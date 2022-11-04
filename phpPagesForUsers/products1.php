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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--pt a potrivi cand micsorez ecranul-->
    <meta name="viewport" content="width=device-width , initial-scale=1.0">


    <title>All Products - RedStore</title>


    <!--creez legatura cu fisierul style.css-->
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="images/logo.ico">
</head>

<body>


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



    <!--featured products-->
    <div class="small-container">
        <div class="row row-2">
            <h2>All Products</h2>
            <!-- <select>
               <option>Default Shorting</option>
               <option>Short by price</option>
               <option>Short by popularity </option>
               <option>Short by rating</option>
               <option>Short by sale</option>
           </select> -->
        </div>

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
            <div class="row">
                <div class="col-4">
                    <a href="products-details.php"><img src="images/product-9.jpg" id="Referinta9"
                            onclick="passvalues(9)" alt="Error open image product-9"></a>
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
                    <h4 id="Referinta10title">Bycles3</h4>
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
            <div class="page-btn">
                <span onclick="location.href = 'products1.php';">1</span>

                <span onclick="location.href = 'products2.php';">2</span>
                <span onclick="location.href = 'products3.php';">3</span>

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
                    <!--poate pun o imagine-->
                    <p>Nu camera fotografică este esența, ci fotograful din spatele ei.</p>
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
    <!--folosesc un id pt a identifica MenuItems-->
    <script src="myscript.js">
    </script>
</body>

</html>