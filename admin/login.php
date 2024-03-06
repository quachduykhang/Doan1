<?php
/*
session_start();
header('Content-Type: text/html; charset=UTF-8');
 
if (isset($_POST['dangnhap'])) 
{
    include('../config/db.php');
    $tennv = $_POST['tennv'];
    $matkhaunv = $_POST['matkhaunv'];
    if (!$tennv || !$matkhaunv) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. ";
        exit;
    }
     
    $sql = "SELECT * FROM  tb_quanlynhanvien WHERE `tennv`='$tennv'";
    $result = mysqli_query($conn,$sql);
    $num_rows = mysqli_num_rows($result);
    if ($num_rows == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. ";
        exit;   
    }
    $row = $result->fetch_assoc();
    if ($matkhaunv== $row['matkhaunv']) {
    $_SESSION['tennv'] = $row['tennv'];
    
    echo "Xin chào " . $tennv . ". Bạn đã đăng nhập thành công. <a href='index.php'>Về trang chủ</a>";
    die();
    }
    else
    { echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
}
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/tt.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
      
    <title>Login -Admin</title>
    <link rel="stylesheet" href="">
</head>
<body>
<div class ="square">
    <i style = "--clr:#00ff0a"></i>
    <i style =" --clr:#0A00FF"></i>
    <i style ="--clr: #00FFFF"></i>
    <div class="main">
    <h2>Đăng nhập</h2>
    <form action="" method="POST">
    <div class="inputBx">
        <input type="text" placeholder="Username"  name ="tennv">
    </div>
    <div class="inputBx">
        <input type="password" id="matkhaunv" name="matkhaunv" placeholder="Matkhaunv">
    </div>

  <div class="links">
        <button  type="submit" class="dangnhap" name="dangnhap" > Đăng nhập </button>
        </div>
       
  </form>
</div>
</div>

</body>
</html>