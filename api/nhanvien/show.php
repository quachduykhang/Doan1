<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');

include_once('../../config/db.php');

include_once('../../model/nhanvien.php');

$db = new db(); //db từ class db
$connect = $db->connect(); //từ class suy ra hàm

$nhanvien = new nhanvien($connect);

$nhanvien -> Ma_nv = isset($_GET['id']) ? $_GET['id'] : die();

$nhanvien->show();

$nhanvien_item =array(
    'Ma_kh' => $khachhang->Ma_kh,
      'Matkhau' => $khachhang->Matkhau,
      'Email' => $khachhang->Email,
      'Hoten' => $khachhang->Hoten,
      'Namsinh' => $khachhang->Namsinh,
      'Gioitinh' =>  $khachhang->Gioitinh,
      'Sodt' =>  $khachhang->Sodt,
      'Hinhanh' =>  $khachhang->Hinhanh,
      'Diem' =>  $khachhang->Diem,
      'Diachi' =>  $khachhang->Diachi

);
print_r(json_encode($nhanvien_item));

?>  