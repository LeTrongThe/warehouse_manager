<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Lugx Gaming Shop HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
  </head>

<body>

<?php
    session_start();
    include_once("connection.php"); 
  ?>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo1.png" alt="" style="width: 158px; border-radius: 10px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="index.php" class="active">Home</a></li>
                      
                      <li><a href="?page=product_management">Product Details</a></li>

                      <?php 
                        if(isset($_SESSION['us']) && $_SESSION['us'] !=""){
                                ?>
                      <li><a href="?page=logout">Hi, <?php echo $_SESSION['us'] ?></a></li>
                      <?php 
                              }
                             else{
                             ?>

                        <li><a href="?page=login">Sign In</a></li>

                      <?php 
                                    }
                                ?>

                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="caption header-text">
          <h6>Welcome to ATN</h6>
            <h2>BEST TOY SITE EVER!</h2>
            <p>ATN is a Vietnamese company which is selling toys to teenagers in many provinces all over Vietnam</p>

						<div class="search_box pull-right" class="col-lg-4 offset-lg-2">
                            <form class="d-flex" action="?page=search" method="POST">
                                <input  type="text" placeholder="Search"  name="Search_product" required>
                                <button class="btn btn-outline-secondary" name="Search_button" type="submit">Search</button>
                            </form>
						</div>  
          </div>
        </div>
        <div class="col-lg-4 offset-lg-2">
          <div class="right-image">
            <img src="assets/images/toy.png" alt="">

          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
	if(isset($_GET['page'])){
        $page = $_GET['page'];
        if($page=="register"){
            include_once("Register.php");
        }
        elseif($page=="login"){
            include_once("Login.php");
        }
        elseif($page=="category_management"){
            include_once("Category_Management.php");
        }
        elseif($page=="product_management"){
            include_once("Product_Management.php");
        }
        elseif($page=="add_category"){
            include_once("Add_Category.php");
        }
        elseif($page=="update_category"){
            include_once("Update_Category.php");
        }
        elseif($page=="add_product"){
            include_once("Add_Product.php");
        }
        elseif($page=="update_product"){
            include_once("Update_Product.php");
        }
        elseif($page=="logout"){
            include_once("Logout.php");
        }
        elseif($page=="update_customer"){
            include_once("Update_customer.php");
        }elseif($page=="cart"){
            include_once("cart.php");
        }elseif($page=="search"){
            include_once("search.php");
        }elseif($page=="intro"){
            include_once("intro.php");
        }
        elseif($page=="supplier_management"){
            include_once("Supplier_Management.php");
        }
        elseif($page=="add_supplier"){
            include_once("Add_Supplier.php");
        }
        elseif($page=="update_supplier"){
            include_once("Update_Supplier.php");
      }
    }else{
        include_once("Content.php");
    }
	?>




  
 

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2048 ATN TOY Company. All rights reserved. &nbsp;&nbsp; <a rel="nofollow" href="https://templatemo.com" target="_blank">Design: TemplateMo</a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>