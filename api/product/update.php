<?php

header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Access-Control-Allow-Methods:PUSH');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once('../../config/db.php');

include_once('../../model/product.php');

$db = new db(); //db từ class db
$connect = $db->connect(); //từ class suy ra hàm

$product = new product($connect);
$data =json_decode(file_get_contents("php://input"));

$product->Ma_sp =$data->Ma_sp;
$product->Ma_dm =$data->Ma_dm;
$product->Tensp =$data->Tensp;
$product->Gia =$data->Gia;
$product->Giamgia =$data->Giamgia;
$product->Hinhanhsp =$data->Hinhanhsp;
$product->Motasp =$data->Motasp;
$product->Thoigianban =$data->Thoigianban;
$product->Thoigiancapnhat =$data->Thoigiancapnhat;

if($product->update()){
    echo json_encode(array('message',' update thành công'));
}else{
    echo json_encode(array('message',' updateThất Bại rồi'));
}

?>
