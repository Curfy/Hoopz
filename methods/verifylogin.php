<?php
header('Content-Type: application/json');

include("db.php");

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$hashedpassword = hash('md5', $password);
// $username = "zenovain";
// $password = "123";

$stmt = $db->prepare("SELECT * FROM accounts WHERE username = ? AND password = ?");
$result = $stmt->execute([$username, $hashedpassword]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

// $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
// echo json_encode($result[0]['username']);

if($result){

    $hashedtoken = base64_encode(hash('md5', $result['username'] . $_SERVER['HTTP_USER_AGENT'] . time()));

    // if($checkbox == 'true'){
    //     $_SESSION['token'] = $hashed;
    // }
    
    
    // $ip = $_SERVER['REMOTE_ADDR'];
    $ip = '112.200.149.23';
    $ipInfo = file_get_contents('http://ip-api.com/json/' . $ip);
    $ipInfo = json_decode($ipInfo);
    $timezone = $ipInfo->timezone;
    date_default_timezone_set($timezone);
    $logindate = date('m/d/Y - h:i A');
    

    $stmt = $db->prepare("UPDATE accounts SET token = '$hashedtoken', lastlogin = '$logindate' WHERE username = '$username' AND password = '$hashedpassword'");
    $stmt->execute();

    echo json_encode(['status' => '201', 'token' => $hashedtoken]);
    
}else{
    echo json_encode(['status' => '400']);
}

?>