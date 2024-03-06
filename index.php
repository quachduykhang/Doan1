<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>shop</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
       
        <link rel="shortcut icon" href="images/logo/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_four"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_one"></div>
                </div>
            </div>
        </div>
      
       
           <?php
            include("view/header.php");
            if(!isset($_GET["pid"]))
            {
               
                include('view/center.php');
               
            }

            else{
               $pid=intval($_GET['pid']);
               switch($pid)
                {
                    case 1:include('view/gioithieu.php'); break;
                    case 2 :include('view/login.php'); break;
                    case 3 :include('view/product-detail.php'); break;
                    case 4: include('view/product.php');break;
                    case 5: include('view/lienhe.php');break;
                    case 6: include('view/register.php');break;
                    case 7: include('view/lienhe.php'); break;
                    case 9: include('view/chat.php'); break;
                    case 10 :include('view/blog.php');break;
                    case 11 : include('view/blog-details.php');break;
                    case 12 : include('view/thanhtoan.php');break;
                    case 13: include('view/product.php'); break;
                    case 14:include('view/product-carousal.php');break;
                    case 15: include('view/wishlist.php');break;
                    case 16: include('view/lienhe.php');break;
                 

                }
            }
            include("view/footer.php");
?>
      
        <div class="scroll-up" id="scroll">
            <a href="#" class="theme-bg white d-block text-center position-fixed mr-10">
                <span class="icon-chevrons-up"></span>
            </a>
        </div>

        <!-- All js here -->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/vendor/jquery-3.6.0.min.js"></script>
        <script src="js/jquery.inputarrow.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/jquery.elevateZoom-3.0.8.min.js"></script>
        <script src="js/jquery.fancybox.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/countdown.min.js"></script>
        <script src="js/jquery.meanmenu.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        
    </body>
</html>