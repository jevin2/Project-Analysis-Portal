<?php
session_start();
require 'vendor/autoload.php';

if(isset($_SESSION["id"])){
    $client = new MongoDB\Client;
    $db = $client->demo;
    $users = $db->teachers;
    $id = $_SESSION["id"];
    $qry = array("_id"=> $id);
    $result = $users->findOne($qry);
}else{
    header("Location: /demo/teacher_index.php");
}
?>