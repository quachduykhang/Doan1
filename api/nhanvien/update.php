<?php

header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Access-Control-Allow-Methods:PUSH');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once('../../config/db.php');

include_once('../../model/nhanvien.php');

$db = new db(); //db từ class db
$connect = $db->connect(); //từ class suy ra hàm

$nhanvien = new nhanvien($connect);
$data =json_decode(file_get_contents("php://input"));

$nhanvien->Ma_nv =$data->Ma_nv;
$nhanvien->Tennv =$data->Tennv;
$nhanvien->Matkhau =$data->Matkhau;
$nhanvien->Namsinh =$data->Namsinh;
$nhanvien->Gioitinh =$data->Gioitinh;
$nhanvien->Sodt =$data->Sodt;
$nhanvien->diachi =$data->diachi;
$nhanvien->Hinhanh =$data->Hinhanh;
$nhanvien->chucvu =$data->chucvu;


if($nhanvien->update()){
    echo json_encode(array('message',' update thành công'));
}else{
    echo json_encode(array('message',' updateThất Bại rồi'));
}

?>
