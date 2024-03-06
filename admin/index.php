<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/tq.css">
</head>
<style>
    .nav {
    top: 0;
    left: 0;
    background-color: #999999;
    color: #fff;
    display: flex;
    padding: 2ch;
    justify-content: space-between;
    align-items: center;
    z-index: 999;
    height: 4ch;
}
body {
    font-family: Arial, sans-serif;
    background-color: #DDDDDD;
    margin: 0;
    padding: 0;
}
</style>
<body >

   


    <div>
        
<?php
                   
            include_once("header.php");
         /*   
            if(isset($_SESSION["tennv"])){
            
           
          

         else{
            */
            if(!isset($_GET["id"]))
            {
                include("tongquan.php");  
            } 
                 $id=intval($_GET['id']);
               switch($id)
               {
                   case 1: include("Quanlykhachhang/Qlkh.php"); break;
                   case 2 : include("Quanlysanpham/sanpham.php"); break;
                   case 3 : include("Quanlytintuc/tintuc.php"); break;
                   case 4 : include("Quanlyphanhoi/phkh.php"); break;
                   case 5 : include("Quanlynhanvien/quanlynhanvien.php"); break;
                   case 6 : include("Quanlysanpham/creat.php");break;
                   case 7 : include("Quanlykhachhang/createdkhachhang.php");break;
                   case 8 : include("Quanlynhanvien/createdn.php");break;
                   case 9 : include("Quanlysanpham/chitietsp.php");break;
                   case 10 : include("../edit/xoakhachhang.php");break;
                   case 11 : include("../edit/themsanpham.php");break;
                   case 12 : include("../edit/xoasanpham.php");break;
                   case 13 : include("../edit/suasanpham.php");break;
                   case 14 : include ("../edit/suatintuc.php");break;
                   case 15 : include("../edit/xoatintuc.php");break;
                   case 16 : include ("../edit/themtintuc.php"); break;
                   case 17 : include("../edit/xoanhanvien.php"); break;
                   case 18 : include("Quanlyphanhoi/phkh.php"); break;
                   case 19 : include("login.php"); break;
                   case 20 : include("Quanlysanpham/chitietsp.php"); break;
                   case 22 : include("Quanlydonhang/Quanlydonhang.php"); break;
                   case 23 : include("Quanlydonhang/chitietdonhang.php"); break;

                      }
                      /*
                     }
             }
             
             else if (!isset($_SESSION["tennv"])){
                echo "<script> alert('Chao xìn! Vui lòng đăng nhập!');</script>";
            }
            */
?>
         
         </div>
<?php
             include_once("footer.php"); 
            ?>
</body>
</html>
 