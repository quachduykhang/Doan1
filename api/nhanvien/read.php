<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');

  include_once('../../config/db.php');

    include_once('../../model/nhanvien.php');

$db = new db(); //db từ class db
$connect = $db->connect(); //từ class suy ra hàm

$nhanvien = new nhanvien($connect);
$read = $nhanvien->read();
$num = $read->rowCount(); // corrected typo in rowCount

if($num>0){
  $nhanvien_array=[];
  $nhanvien_array['data']=[];
   while ($row =$read->fetch(PDO::FETCH_ASSOC)){
    extract($row);
    $nhanvien_item =array(
      'Ma_nv' => $Ma_nv,
      'Tennv' => $Tennv,
      'Matkhau' => $Matkhau,
      'Namsinh' => $Namsinh,
      'Gioitinh' => $Gioitinh,
      'Sodt' => $Sodt,
      'diachi' => $diachi,
      'Hinhanh' => $Hinhanh,
      'chucvu' => $chucvu
      
    );
       array_push($nhanvien_array['data'],$nhanvien_item);
   }
   echo json_encode($nhanvien_array);
}
?>