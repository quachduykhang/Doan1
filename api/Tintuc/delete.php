<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once('../../config/db.php');
include_once('../../model/tintuc.php');

$db = new db();
$connect = $db->connect();
$tintuc = new tintuc($connect);
$data = json_decode(file_get_contents("php://input"));

// Check if Ma_sp is properly set in the request payload
if (isset($data->Ma_tt)) {
    $tintuc->Ma_tt = $data->Ma_tt;

    if ($tintuc->delete()) {
        echo json_encode(array('message' => 'Xóa thành công'));
    } else {
        echo json_encode(array('message' => 'Xóa thất bại'));
    }
} else {
    echo json_encode(array('message' => 'Missing Ma_tt in request'));
}

?>
