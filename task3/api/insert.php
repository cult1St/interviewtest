<?php 

require_once "classes/Network.php";
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");

$rq = $_SERVER['REQUEST_METHOD'];

if($rq != "POST"){
    http_response_code(405);
    $response = [
        'status'=> "failure",
        'message'=>"Invalid method selected",
        'data'=>null
    ];
    echo json_encode($response);
    exit();
}
$data = file_get_contents("php://input");
$data = json_decode($data);



if(!isset($data->number) || !isset($data->network) || !isset($data->message)){
    http_response_code(400);
    $response = [
        "status"=> "failure",
        "message"=> "Please input documentation isset",
        "data"=> null
    ];
    echo json_encode($response);
    exit();
}
if(empty($data->number) || empty($data->network) || empty($data->message)){
    http_response_code(400);
    $response = [
        "status"=> "failure",
        "message"=> "Please input documentation empty",
        "data"=> null
    ];
    echo json_encode($response);
    exit();
}
$network1 = new Network();
$data->ref_code = time().rand();
$insert = $network1->insert_network($data->number, $data->network, $data->message, $data->ref_code);
if($insert){
    http_response_code(200);
    $response = [
        "phone_number"=> $data->number,
        "mobile_network"=> $data->network,
        "status"=> "success",
        "message"=> "Registration successfull"
    ];
    echo json_encode($response);
    exit();
}else{
    http_response_code(405);
    $response = [
        "status"=> "failure",
        "message"=> "Unable to register",
        "data"=> null
    ];
    echo json_encode($response);
    exit();
}