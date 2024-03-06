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

 <div class="maincontent">
        <div class="Font">

        <div class ="FontBackground">ĐƠN HÀNG</div>
        <table>

            <tr>
               <th>Mã hóa đơn</th>
               <th> Mã sản phẩm</th>
               <th> Số lượng</th>
               <th> Đơn Giá</th>
              
            </tr>
<?php
   include("../config/ctr_fm.php");
   $control =new ctr_fm();
   $result =$control->chitietdonhang();

?>
<?php
         while ($row=$result->fetch_assoc())
         {
            ?>
<tr>
    <td><?php echo $row["ma_hd"];?></td>
    <td><?php echo $row["ma_sp"];?></td>
    <td><?php echo $row["soluong"];?></td>
    <td><?php echo $row["dongia"];?></td>
</tr>
<?php
}
?>
    </table>
        </div>
            </div>
     
    
    <a href="index.php?id=22">quay lại</a>

</body>
</html>