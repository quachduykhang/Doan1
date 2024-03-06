<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');

include_once('../../config/db.php');


include_once('../../model/product.php');

$db = new db(); //db từ class db
$connect = $db->connect(); //từ class suy ra hàm

$product = new product($connect);

$product -> Ma_sp = isset($_GET['id']) ? $_GET['id'] : die();

$product->show();

$product_item =array(
    'Ma_sp' => $product->Ma_sp,
      'Ma_dm' => $product->Ma_dm,
      'Tensp' => $product->Tensp,
      'Gia' => $product->Gia,
      'Giamgia' => $product->Giamgia,
      'Hinhanhsp' => $product->Hinhanhsp,
      'Motasp' => $product->Motasp,
      'Thoigianban' => $product->Thoigianban,
      'Thoigiancapnhat' => $product->Thoigiancapnhat
);
print_r(json_encode($product_item));

?>