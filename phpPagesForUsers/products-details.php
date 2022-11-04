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
    <title>Products Details</title>
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


    <!---Single product details , id for the large image-->

    <!--here is single-product-->
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="" id="ProductImg" alt="error open" width="100%">

            </div>
            <div class="col-2">
                <p style="padding-left:30px;"> Home / </p>
                <h1 style="padding-left:50px;" id="ProductTitle">""</h1>
                <h4 style="padding-left:50px;">$50.00</h4>
                <!--pt poze nu am nevoie -->
                <input type="number " value="1" readonly>
                <a class="btn" onclick="myAlert('Carpe diem! This is only front-end.')">Add To Cart</a>
                <h3 style="padding-left:50px;">Product details</h3>
                <p style="padding-left:50px;">This is a part of our new collection</p>
            </div>
        </div>

        <!---title-->

        <div class="small-container ">
            <div class="row row-2 ">
                <h2>
                    Related Products
                </h2>
                <p> View more</p>
            </div>
        </div>

        <div class="row ">
            <div class="col-4 ">
                <img src="images/product-9.jpg " alt="Error open image product1 ">
                <h4>Two bicycles</h4>
                <div class="rating ">
                    <i class="fa fa-star "></i>
                    <i class="fa fa-star "></i>
                    <i class="fa fa-star "></i>
                    <i class="fa fa-star "></i>
                    <i class="fa fa-star "></i>
                    <i class="fa fa-star-o "></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4 ">
                <img src="images/product-10.jpg " alt="Error open image product1 ">
                <h4>My Old Desktop</h4>
                <div class="rating ">
                    <i class="fa fa-star "></i>
                    <i class="fa fa-star "></i>
                    <i class="fa fa-star "></i>
                    <i class="fa fa-star "></i>
                    <i class="fa fa-star "></i>
                    <i class="fa fa-star-o "></i>
                </div>
                <p>$50.00</p>
            </div>


        </div>
    </div>


    </script>
    <script src="myscript.js">
    </script>

</body>

</html>