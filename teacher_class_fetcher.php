<?php
session_start();
require 'vendor/autoload.php';
if(isset($_SESSION["id"])){
    $client = new MongoDB\Client;
    $db = $client->demo;
    $students = $db->students;
    $class = $_SESSION["class"];
    $qry = array("class"=> $class);
    $result = $students->find($qry);
    $projects=[];
    $internships=[];
    $courses=[];
    $publications=[];
    $participation=[];
    $achievements=[];
    $platform=[];
    foreach($result as $student){
        if(isset($student['projects']) && count($student['projects']) >= 1){
            foreach($student['projects'] as $p){
                #echo ''.$p['domain'];
                array_push($projects,$p['domain']);
            }
        }
        if(isset($student['internships']) && count($student['internships']) >= 1){
            foreach($student['internships'] as $p){
                #echo ''.$p['domain'];
                array_push($internships,$p['domain']);
            }
        }
        if(isset($student['courses']) && count($student['courses']) >= 1){
            foreach($student['courses'] as $p){
                #echo ''.$p['domain'];
                array_push($courses,$p['domain']);
                array_push($platform,$p['platform']);
            }
        }
        if(isset($student['publications']) && count($student['publications']) >= 1){
            foreach($student['publications'] as $p){
                #echo ''.$p['domain'];
                array_push($publications,$p['domain']);
            }
        }
        if(isset($student['participation']) && count($student['participation']) >= 1){
            foreach($student['participation'] as $p){
                #echo ''.$p['domain'];
                array_push($participation,$p['domain']);
            }
        }
        if(isset($student['achievements']) && count($student['achievements']) >= 1){
            foreach($student['achievements'] as $p){
                #echo ''.$p['domain'];
                array_push($achievements,$p['domain']);
            }
        }
    }
    $freq=array_count_values($projects);
    $freq1=array_count_values($internships);
    $freq2=array_count_values($courses);
    $freq22=array_count_values($platform);
    $freq3=array_count_values($achievements);
    $freq4=array_count_values($publications);
    $freq5=array_count_values($participation);
}else{
    header("Location: /demo/teacher_index.php");
}
?>