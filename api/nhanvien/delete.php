<?php

header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Access-Control-Allow-Methods:DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once('../../config/db.php');

include_once('../../model/nhanvien.php');

$db = new db(); //db từ class db
$connect = $db->connect(); //từ class suy ra hàm

$nhanvien = new nhanvien($connect);
$data =json_decode(file_get_contents("php://input"));

if (isset($data->Ma_nv)) {
    $nhanvien->Ma_nv = $data->Ma_nv;

    if ($nhanvien->delete()) {
        echo json_encode(array('message' => 'Xóa thành công'));
    } else {
        echo json_encode(array('message' => 'Xóa thất bại'));
    }
} else {
    echo json_encode(array('message' => 'Missing Ma_nv in request'));
}

?>
