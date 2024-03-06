<?php

header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Access-Control-Allow-Methods:PUSH');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once('../../config/db.php');

include_once('../../model/khachhang.php');

$db = new db(); //db từ class db
$connect = $db->connect(); //từ class suy ra hàm

$khachhang = new khachhang($connect);
$data =json_decode(file_get_contents("php://input"));

$khachhang->Ma_kh =$data->Ma_kh;
$khachhang->Matkhau =$data->Matkhau;
$khachhang->Email =$data->Email;
$khachhang->Hoten =$data->Gia;
$khachhang->Namsinh =$data->Giamgia;
$khachhang->Sodt =$data->Hinhanhsp;
$khachhang->Hinhanh =$data->Motasp;
$khachhang->Diem =$data->Thoigianban;
$khachhang->Diachi =$data->Thoigiancapnhat;

if($product->update()){
    echo json_encode(array('message',' update thành công'));
}else{
    echo json_encode(array('message',' updateThất Bại rồi'));
}

?>
