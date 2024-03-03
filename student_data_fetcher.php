<?php
session_start();
if(isset($_SESSION['id'])){
    require 'vendor/autoload.php';
    $client = new MongoDB\Client;
    $db = $client->demo;
    $students = $db->students;
    $sname = $_GET['name'];
     $sid = $_GET['id'];
     $qry = array("_id"=> $sid);
     $result = $students->findOne($qry);
}else{
    header("Location: /demo/teacher_index.php");
}

?>