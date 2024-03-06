<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods: GET,POST');
header('Content-Type:application/json');

header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data =json_decode(file_get_contents('php://input'));
$Email = $_POST['Email'];
$Matkhau = $_POST['Matkhau'];

http_response_code(200);
if($Email && $Matkhau){
    $json =$users->auth($Email,$Matkhau);
    if($json){
        echo $json;

    }else{
        http_response_code(400);
        echo json_encode([
            'error'=> true,
            'message'=> 'use account not found'
        ]);

    }

} else{
    echo json_encode([
        'error'=>true,
        'message'=>'you are missing imformation'

    ]);
}
exit();

?>