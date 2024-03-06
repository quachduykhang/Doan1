<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');

  include_once('../../config/db.php');

    include_once('../../model/khachhang.php');

$db = new db(); //db từ class db
$connect = $db->connect(); //từ class suy ra hàm

$khachhang = new khachhang($connect);
$read = $khachhang->read();
$num = $read->rowCount(); // corrected typo in rowCount

if($num>0){
  $khachhang_array=[];
  $khachhang_array['data']=[];
   while ($row =$read->fetch(PDO::FETCH_ASSOC)){
    extract($row);
    $khachhang_item =array(
      'Ma_kh' => $Ma_kh,
      'Matkhau' => $Matkhau,
      'Email' => $Email,
      'Hoten' => $Hoten,
      'Namsinh' => $Namsinh,
      'Gioitinh' => $Gioitinh,
      'Sodt' => $Sodt,
      'Hinhanh' => $Hinhanh,
      'Diem' => $Diem,
      'Diachi' => $Diachi
    );
       array_push($khachhang_array['data'],$khachhang_item);
   }
   echo json_encode($khachhang_array);
}
?>

