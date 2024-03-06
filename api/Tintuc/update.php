<?php

header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Access-Control-Allow-Methods:PUSH');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once('../../config/db.php');

include_once('../../model/tintuc.php');

$db = new db(); //db từ class db
$connect = $db->connect(); //từ class suy ra hàm

$tintuc = new tintuc($connect);
$data =json_decode(file_get_contents("php://input"));

$tintuc->Ma_nv =$data->Ma_nv;
$tintuc->Hinhanh =$data->Hinhanh;
$tintuc->Tieude =$data->Tieude;
$tintuc->Mota =$data->Mota;
$tintuc->Ngay =$data->Ngay;
$tintuc->Tennv =$data->Tennv;
$tintuc->luotthich =$data->luotthich;
$tintuc->luotxem =$data->luotxem;


if($tintuc->update()){
    echo json_encode(array('message',' update thành công'));
}else{
    echo json_encode(array('message',' updateThất Bại rồi'));
}

?>
