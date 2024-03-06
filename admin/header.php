<?php
   if(isset($_POST['dangxuat'])){
    if(isset($_SESSION['tennv']))
    unset($_SESSION['tennv']);
    
   }
?>

        <div class="nav">
            <h1><span class="dashboard-text">NMK STORE</span></h1>
            <nav class="navbar-header-admin">
                <a href="index.php" style = "border: 1px solid white;"> Tổng quan </a>
                <a href="index.php?id=2">Sản phẩm</a>
                <a href="index.php?id=5">Nhân viên</a>
                <a href="index.php?id=1">Khách hàng</a>
                <a href="index.php?id=3">Tin tức</a>
                <a href="index.php?id=22">Đơn hàng </a>
                <a href="index.php?id=18"> Phản hồi liên hệ</a>
                <form action="index.php" method="POST">
                       <?php
                           if(isset( $_SESSION['tennv'])){
                             echo $_SESSION['tennv'];              
                        ?> 
                         <button name ="dangxuat" type="" class="bi bi-box-arrow-right" ></button>
                         <?php 
                        } else{
                         ?>
                         <a href="login.php"><img width="35" height="30" src="https://img.icons8.com/ios-filled/50/gender-neutral-user.png" alt="gender-neutral-user"/></a>
                        
                    <?php
                         }
                      ?>
                </form>
            </nav>
        </div>