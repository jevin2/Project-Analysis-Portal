<?php
require 'vendor/autoload.php';
$client = new MongoDB\Client;
$db = $client->demo;
$teachers = $db->teachers;
$users = $db->users;
if(isset($_POST['addTeacher'])){
   $insertOneResult = $teachers->insertOne([
      '_id' => $_POST['id'],
      'mail' => $_POST['email'],
      'name' => $_POST['name'],
      'phone' => $_POST['mobile'],
      'class' => $_POST['classlist'][0],
      'classlist' => $_POST['classlist'],
      'subjectlist' => $_POST['subjectlist'],
      'semesterlist' => $_POST['semesterlist'],
      'menteesid' => $_POST['menteesid'],
      'mentees' => $_POST['mentees']
   ]);
   if($insertOneResult){
      $qstring = "Added Teacher: ".$_POST['id'];
      $insertOneResult = $users->insertOne([
      '_id' => $_POST['id'],
      'mail' => $_POST['email'],
      'password' => password_hash($_POST['pw'],PASSWORD_BCRYPT)
   ]);
   }else{
      $qstring = "Could Not Add Teacher: ".$_POST['id'];
   }
   header("Location: /demo/admin_home.php?error=".$qstring);
}

if(isset($_POST['editClass'])){
   $var=[];
   $var1=[];
   $var2=[];
   $qry = array("_id"=> $_POST['id']);
   $result = $teachers->findOne($qry);
   foreach($result['classlist'] as $x){
      array_push($var,$x);
   }
   foreach($result['subjectlist'] as $x1){
      array_push($var1,$x1);
   }
   foreach($result['semesterlist'] as $x1){
      array_push($var2,$x2);
   }
   if(in_array($_POST['class1'],$var)){
      $key = array_search($_POST['class1'], $var);
      $offset = $var1[$key];
      $offset2 = $var[$key];
      $offset3 = $var2[$key];
      echo ''.$key.' '.$offset;
      if($_POST['class1'] === $result['class'])
      $updateRes = $teachers->updateOne([ '_id' => $_POST['id'] ], ['$pull'=> ['subjectlist'=> $offset]]);
      $updateRe = $teachers->updateOne([ '_id' => $_POST['id'] ],['$pull'=> ['classlist'=> $offset2]]);
      $updateRe = $teachers->updateOne([ '_id' => $_POST['id'] ],['$pull'=> ['semesterlist'=> $offset3]]);
      $updateRes1 = $teachers->updateOne([ '_id'=> $_POST['id'] ],['$push'=> ['subjectlist'=>['$each' => array($_POST['subject']),'$position' => $key ]]]);
      $updateRe1 = $teachers->updateOne([ '_id'=> $_POST['id'] ],[ '$push'=> ['classlist'=>['$each' => array($_POST['class']),'$position' => $key ]]]);
      $updateRe1 = $teachers->updateOne([ '_id'=> $_POST['id'] ],[ '$push'=> ['semesterlist'=>['$each' => array($_POST['semester']),'$position' => $key ]]]);
      if(!$updateRes){
         $qstring = "Error";
      }else if(!$updateRes1){
         $qstring = "Could not update";
      }else{
         $qstring = "Updated!";
      }
   }else{
      $qstring = "No class found!";
   }
   header("Location: /demo/admin_home.php?error=".$qstring);
}

if(isset($_POST['addClass'])){
   $updateRes = $teachers->updateOne([ '_id'=> $_POST['id'] ],['$push'=> ['subjectlist'=>$_POST['subject'], 'classlist'=>$_POST['class'], 'semesterlist'=>$_POST['semester']]] );
   if($updateRes){
      $qstring = "Added Class ".$_POST['class'];
   }else{
      $qstring = "Error!";
   }
   header("Location: /demo/admin_home.php?error=".$qstring);
}


if(isset($_POST['removeClass'])){
   $var=[];
   $var1=[];
   $var2=[];
   $qry = array("_id"=> $_POST['id']);
   $result = $teachers->findOne($qry);
   foreach($result['classlist'] as $x){
      array_push($var,$x);
   }
   foreach($result['subjectlist'] as $x1){
      array_push($var1,$x1);
   }
   foreach($result['semesterlist'] as $x1){
      array_push($var2,$x2);
   }
   if(in_array($_POST['class'],$var)){
         $key = array_search($_POST['class'], $var);
         $offset = $var1[$key];
         $offset2 = $var[$key];
         $updateRes = $teachers->updateOne([ '_id' => $_POST['id'] ],['$pull'=> ['subjectlist'=> $offset]]);
         $updateRe = $teachers->updateOne([ '_id' => $_POST['id'] ],['$pull'=> ['classlist'=> $offset2]]);
         $updateRe = $teachers->updateOne([ '_id' => $_POST['id'] ],['$pull'=> ['semesterlist'=> $offset2]]);
         if(!$updateRes){
            $qstring = "Error";
         }else if(!$updateRe){
            $qstring = "Could not update";
         }else{
            $qstring = "Updated!";
         }
   }else{
      $qstring = "No class found!";
   }
   header("Location: /demo/admin_home.php?error=".$qstring);
}


if(isset($_POST['addMentee'])){
   $updateRes = $teachers->updateOne([ '_id'=> $_POST['id'] ],['$push'=> ['menteesid'=>['$each' => $_POST['menteesid'],'$position' => -1],'mentees'=>['$each' => $_POST['mentees'],'$position' => -1]]]);
   if($updateRes){
      $qstring = "Added!";
   }else{
      $qstring = "Error!";
   }
   header("Location: /demo/admin_home.php?error=".$qstring);
}    
?>