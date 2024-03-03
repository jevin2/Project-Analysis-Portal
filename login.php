<?php
session_start(); 
require 'vendor/autoload.php';

if (isset($_POST['uname']) && isset($_POST['pass']) && !empty($_POST['uname'])) {
    $index = "teacher_index";
    $home= "teacher_home";

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $mail = validate($_POST['uname']);
    $pass = validate($_POST['pass']);

    if($_POST['type']==='student'){
        $index = "student_index";
        $home= "student_home";
        $_SESSION["type"]="student";
    }

    $client = new MongoDB\Client;
    $db = $client->demo;
    $users = $db->users;

    $qry = array("mail" => $mail);
    $result = $users->findOne($qry);

    if($result && password_verify($pass, $result['password'])){
        $_SESSION['id']=$result['_id'];
        $_SESSION["mail"] = $_POST["uname"];
        header("Location: $home.php");
    }else{        
        header("Location: $index.php?error=Username or Password is incorrect.");
        exit();
    }
}else{
    header("Location: index.php");
    session_destroy();
}
?>
