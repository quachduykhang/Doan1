<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once('../../config/db.php');

include_once('../../model/khachhang.php');

$db = new db(); //db từ class db
$connect = $db->connect(); //từ class suy ra hàm

$khachhang = new khachhang($connect);
$data =json_decode(file_get_contents("php://input"));

$khachhang->Matkhau =$data->Matkhau;
$khachhang->Email =$data->Email;
$khachhang->Hoten =$data->Hoten;
$khachhang->Namsinh =$data->Namsinh;
$khachhang->Gioitinh =$data->Gioitinh;
$khachhang->Sodt =$data->Sodt;
$khachhang->Hinhanh =$data->Hinhanh;
$khachhang->Diem =$data->Diem;
$khachhang->Diachi =$data->Diachi;

if($khachhang->create()){
    echo json_encode(array('message','thành công'));
}else{
    echo json_encode(array('message','Thất Bại rồi'));
}

?>