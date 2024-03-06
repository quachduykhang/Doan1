<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

require_once('../config/db.php');
include('../model/khachhang.php');

$Email = $_POST['Email'];
$Matkhau = $_POST['Matkhau'];

http_response_code(200);
// Sử dụng prepared statement để tránh SQL Injection
$loginQuery = "SELECT * FROM `tb_khachhang` WHERE `Email`=? AND `Matkhau`=?";
$db = new db();
$connect = $db->connect();

// Kiểm tra kết nối
if ($connect) {
    $stmt = $connect->prepare($loginQuery);
    $stmt->bindparam('ss', $Email, $Matkhau);
    
    $stmt->execute();
    
    // Lấy kết quả từ câu lệnh chuẩn bị
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $userObj = $result->fetch_assoc();
        $response['status'] = true;
        $response['message'] = "Đăng nhập thành công";
    } else {
        $response['status'] = false;
        $response['message'] = "Tài khoản không tìm thấy";
    }
} else {
    $response['status'] = false;
    $response['message'] = "Lỗi kết nối cơ sở dữ liệu";
}
?>
