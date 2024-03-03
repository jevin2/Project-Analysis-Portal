<?php
session_start();
if(isset($_SESSION["id"])){
    require 'vendor/autoload.php';
    $client = new MongoDB\Client;
    $db = $client->demo;
    $students = $db->students;
    $id = $_SESSION['id'];
    $qry = array("_id"=> $id);
    $result = $students->findOne($qry);
}else{
    header("Location: /demo/student_index.php");
}
?>