<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');

include_once('../../config/db.php');
include_once('../../model/product.php');

$db = new db(); //db từ class db
$connect = $db->connect(); //từ class suy ra hàm

$product = new product($connect);
$read = $product->read();
$num = $read->rowCount(); 
if($num>0){
  $product_array=[];
  $product_array['data']=[];
   while ($row =$read->fetch(PDO::FETCH_ASSOC)){
    extract($row);
    $product_item =array(
      'Ma_sp' => $Ma_sp,
      'Ma_dm' => $Ma_dm,
      'Tensp' => $Tensp,
      'Gia' => $Gia,
      'Giamgia' => $Giamgia,
      'Hinhanhsp' => $Hinhanhsp,
      'Motasp' => $Motasp,
      'Thoigianban' => $Thoigianban,
      'Thoigiancapnhat' => $Thoigiancapnhat
    );
       array_push($product_array['data'],$product_item);
   }
   echo json_encode($product_array);
}
?>