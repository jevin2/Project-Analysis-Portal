<?php
session_start();
require 'vendor/autoload.php';
if(isset($_SESSION["id"])){
    $client = new MongoDB\Client;
    $db = $client->demo;
    $users = $db->students;
    $sid = $_SESSION["id"];
    $qry = array("_id"=> $sid);
    $result = $users->findOne($qry);
    $_SESSION["name"] = $result['name'];
}else{
    header("Location: /demo/student_index.php");
}
?>