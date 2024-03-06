<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/qlnv.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
<!--Get your own code at fontawesome.com-->
    <title>Quản lý đơn hàng </title>
</head>
<body>
<style>
    nav{
    padding: 1px 0;
    z-index: 1;
}
</style>
<div class="maincontent">
        <div class="Font">

        <div class ="FontBackground">Hóa đơn</div>
        <table>
            <tr>
               <th>Mã hóa đơn</th>
               <th> Số điện thoại</th>
               <th> Người Đặt</th>
               <th> Địa chỉ</th>
               <th> Thời gian</th>
               <th> Chi tiết</th>
              
            </tr>
<?php
   include("../config/ctr_fm.php");
   $control =new ctr_fm();
   $result =$control->hoadon();

?>
<?php
         while ($row=$result->fetch_assoc())
         {
            ?>
<tr>
    <td><?php echo $row["ma_hd"];?></td>
    <td><?php echo $row["sodienthoai"];?></td>
    <td><?php echo $row["nguoidat"];?></td>
    <td><?php echo $row["diachi"];?></td>
    <td><?php echo $row["thoigian"];?></td>
     <td><a href="index.php?id=23"> xem</a></td>
</tr>
<?php
}
?>
    </table>
        </div>
            </div>
     
    


</body>
</html>