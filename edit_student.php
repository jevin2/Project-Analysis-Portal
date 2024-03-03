<?php
require 'vendor/autoload.php';
$client = new MongoDB\Client;
$db = $client->demo;
$students = $db->students;
$users = $db->users;
$inactive = $db->deactive;
if(isset($_POST['addStudent'])){
    if($_POST['year'] == 'FE'){
        $class = $_POST['year']." ".$_POST['div'];
        $insertOneResult = $students->insertOne([
        '_id' => $_POST['id'],
        'mail' => $_POST['email'],
        'name' => $_POST['name'],
        'phone' => $_POST['mobile'],
        'edu' => [$_POST['HS'],$_POST['val'],$_POST['JC'],$_POST['cet']],
        'ques' => ['No','No','No','Intermediate','No'],
        'masters' => ['No'],
        'branch' => $_POST['branch'],
        'year' => $_POST['year'],
        'div' => $_POST['div'],
        'class' => $class,
        'semester' => $_POST['semester'],
        'cgpa' => '-',
        'ratings' => '-'
     ]);
    }else{
        $class = $_POST['year']." ".$_POST['branch'];
        if(isset($_POST['div'])){
            $class = $class." ".$_POST['div'];
        }
        $insertOneResult = $students->insertOne([
            '_id' => $_POST['id'],
            'mail' => $_POST['email'],
            'name' => $_POST['name'],
            'phone' => $_POST['mobile'],
            'edu' => [$_POST['HS'],$_POST['val'],$_POST['JC'],$_POST['cet']],
            'ques' => ['No','No','No','Intermediate','No'],
            'masters' => ['No'],
            'class' => $class,
            'branch' => $_POST['branch'],
            'year' => $_POST['year'],
            'div' => $_POST['div'],
            'semester' => $_POST['semester'],
            'cgpa' => '-',
            'ratings' => '-'
         ]);
    }
    if($insertOneResult){
        $qstring = "Added Student: ".$_POST['id'];
        $insertOneResult = $users->insertOne([
            '_id' => $_POST['id'],
            'mail' => $_POST['email'],
            'password' =>password_hash($_POST['pw'],PASSWORD_BCRYPT)
        ]);
    }else{
        $qstring = "Could Not Add Student: ".$_POST['id'];
    }
    header("Location: /demo/admin_home1.php?error=".$qstring);
}

if(isset($_POST['remove'])){
    $qry = array("_id"=> $_POST['id']);
    $result = $students->findOne($qry);
    if($result){
        $result->reason = $_POST['reason'];
        $insertOneResult = $inactive->insertOne($result);
        $deleteResult = $students->deleteOne(['_id' => $_POST['id']]);
        $deleteResult = $users->deleteOne(['_id' => $_POST['id']]);
        $qstring = "Removed student: ".$_POST['id'];
    }else{
        $qstring = "No Student ".$_POST['id'];
    }
    header("Location: /demo/admin_home.php?error=".$qstring);
}
?>