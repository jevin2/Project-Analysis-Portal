<?php
    require 'vendor/autoload.php';
    $client = new MongoDB\Client;
    $db = $client->demo;
    $users = $db->users;
    
    if(isset($_POST['pw'])){
        $mail = $_POST['mail'];
        $op = $_POST['opass'];
        $np = $_POST['npass'];
        $pw = password_hash($np,PASSWORD_BCRYPT);
        $qry = array("mail"=> $mail);
        $result = $users->findOne($qry);
    if($result && password_verify($op, $result['password'])){
        $updateRes = $users->updateOne([ 'mail' => $mail ], [ '$set'=> [ 'password' => $pw] ]);
        if($updateRes){
            header("Location: student_index.php?error=Successfully updated password");
        }
        else{
            header("Location: changepw.php?error=Password incorrect!");
        }
    }
}

