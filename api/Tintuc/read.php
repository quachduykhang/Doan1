<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');

include_once('../../config/db.php');
include_once('../../model/tintuc.php');

$db = new db(); //db từ class db
$connect = $db->connect(); //từ class suy ra hàm

$tintuc = new tintuc($connect);
$read = $tintuc->read();
$num = $read->rowCount(); 
if($num>0){
  $tintuc_array=[];
  $tintuc_array['data']=[];
   while ($row =$read->fetch(PDO::FETCH_ASSOC)){
    extract($row);
    $tintuc_item =array(
      'Ma_tt' => $Ma_tt,
      'Ma_nv' => $Ma_nv,
      'Hinhanh' => $Hinhanh,
      'Tieude' => $Tieude,
      'Mota' => $Mota,
      'Ngay' => $Ngay,
      'Tennv' => $Tennv,
      'luotthich' => $luotthich,
      'luotxem' => $luotxem
    );
       array_push($tintuc_array['data'],$tintuc_item);
   }
   echo json_encode($tintuc_array);
}
?>