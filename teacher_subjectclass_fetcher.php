<?php
session_start();
if(isset($_SESSION["id"])){
    require 'vendor/autoload.php';
    $client = new MongoDB\Client;
    $db = $client->demo;
    $students = $db->students;
    $subclass = $_GET['class'];
    $sub = $_GET['sub'];
    $sem = $_GET['sem'];
    $qry = array("class"=> $subclass,"semester"=>$sem);
    $options = ['sort' => ['_id' => 1]];
    $result = $students->find($qry, $options);
    $sem = 'sem'.$sem;
}else{
    header("Location: /demo/teacher_index.php");
}
?>