<?php
session_start();
if(isset($_SESSION["id"])){
   $s_id = $_SESSION["id"];
   $s_name = $_SESSION["name"];
   require 'vendor/autoload.php';
   $client = new MongoDB\Client;
   $db = $client->demo;
   $students = $db->students;
   $qry = array("_id"=> $s_id);
   $result = $students->findOne($qry);

   if(isset($_POST['quesResponse'])){
      $val = [];
      for ($x = 1; $x <= 5; $x++) {
         array_push($val,$_POST[''.$x]);
      }
      if($_POST['5'] == 'Yes'){
         array_push($val,$_POST['6']);
      }
      $updateRes = $students->updateOne([ '_id' => $s_id ], [ '$set'=> [ 'ques'=> $val ] ]);
      if($updateRes){
         $qstring = 'Updated Responses Successfully!';
      }else{
         $qstring = 'Error While Updating Data. Contact Admin if error persists.';
      }
      header("Location: /demo/student_home.php?error=".$qstring);
   }  

   if(isset($_POST['PGquesResponse'])){
      $val = [];
      if($_POST['1'] == 'Yes'){
         for ($x = 1; $x <= 3; $x++) {
            echo "".$_POST[''.$x];
            array_push($val,$_POST[''.$x]);
         }
         if($_POST['3'] == 'Yes'){
            array_push($val,$_POST['4']);
         }
      }else{
         array_push($val,$_POST['1']);
      }
      $updateRes = $students->updateOne([ '_id' => $s_id ],['$set'=> ['masters'=> $val]] );
      if($updateRes){
            $qstring = 'Updated Responses Successfully!';
      }else{
            $qstring = 'Error While Updating Data. Contact Admin if error persists.';
      }
      header("Location: /demo/student_home.php?error=".$qstring);
   }  

   if(isset($_POST['editStrength'])){
      $updateRes = $students->updateOne([ '_id' => $s_id ],['$set'=> ['strength'=> $_POST['strength']]]);
      if($updateRes){
         $qstring = 'Updated Responses Successfully!';
      }else{
         $qstring = 'Error While Updating Data. Contact Admin if error persists.';
      }
         header("Location: /demo/student_home.php?error=".$qstring);
   }  

   if(isset($_POST['editWeak'])){
      $updateRes = $students->updateOne([ '_id' => $s_id ],['$set'=> ['weakness'=> $_POST['weak']]]);
      if($updateRes){
         $qstring = 'Updated Responses Successfully!';
      }else{
         $qstring = 'Error While Updating Data. Contact Admin if error persists.';
      }
      header("Location: /demo/student_home.php?error=".$qstring);
   }  

   if(isset($_POST['editOppo'])){
      $updateRes = $students->updateOne([ '_id' => $s_id ],['$set'=> ['opportunity'=> $_POST['Oppo']]]);
      if($updateRes){
         $qstring = 'Updated Responses Successfully!';
      }else{
         $qstring = 'Error While Updating Data. Contact Admin if error persists.';
      }
      header("Location: /demo/student_home.php?error=".$qstring);
   }  
                     
   if(isset($_POST['editThreat'])){
      $updateRes = $students->updateOne([ '_id' => $s_id ],['$set'=> ['threat'=> $_POST['threat']]]);
      if($updateRes){
         $qstring = 'Updated Responses Successfully!';
      }else{
         $qstring = 'Error While Updating Data. Contact Admin if error persists.';
      }
      header("Location: /demo/student_home.php?error=".$qstring);
   }  
      

   if(isset($_POST['addProject'])){
      $var=0;
      if(isset($result['projects'])){
         foreach($result['projects'] as $x){
            $var +=1;
         }
      }
      $str = 'projects.p'.$var;
      $value = array("title" => $_POST['title'], "domain" => $_POST['domain'], "description" => $_POST['description'],'tech-stack'=>$_POST['tech-stack'],'link' => $_POST['link']);
      $myJSON = json_encode($value); 
      $updateResult =  $students->updateOne(['_id' => $s_id], ['$set' => [$str => $value]] );
      if($updateResult){
         $qstring = 'Data Updated Successfully!';
      }else{
         $qstring = 'Error While Uploading Data. Contact Admin if error persists.';
      }
      header("Location: /demo/student_home.php?error=".$qstring);
   }  

   if(isset($_POST['addInternship'])){
      $var=0;
      if(isset($result['internships'])){
         foreach($result['internships'] as $x){
               $var +=1;
         }
      }
      $str = 'internships.i'.$var;
      $value = array("company" => $_POST['company'], "position" => $_POST['position'],"domain" => $_POST['domain'], 'duration' => $_POST['duration'], 'link'=>$_POST['link']);
      $myJSON = json_encode($value); 
      $updateResult =  $students->updateOne(['_id' => $s_id],['$set' => [$str => $value]] );
      if($updateResult){
         $qstring = 'Data Updated Successfully!';
      }else{
         $qstring = 'Error While Uploading Data. Contact Admin if error persists.';
      }
      header("Location: /demo/student_home.php?error=".$qstring);
   }  

   if(isset($_POST['addCourse'])){
      $var=0;
      if(isset($result['courses'])){
         foreach($result['courses'] as $x){
            $var +=1;
         }
      }
      $str = 'courses.c'.$var;
      $value = array("title" => $_POST['title'], "domain" => $_POST['domain'], 'duration' => $_POST['duration'], 'platform'=> $_POST['platform'], 'link'=>$_POST['link']);
      $myJSON = json_encode($value); 
      $updateResult =  $students->updateOne(     ['_id' => $s_id],     ['$set' => [$str => $value]] );
      if($updateResult){
         $qstring = 'Data Updated Successfully!';
      }else{
         $qstring = 'Error While Uploading Data. Contact Admin if error persists.';
      }
      header("Location: /demo/student_home.php?error=".$qstring);
   }  

   if(isset($_POST['addPublication'])){
      $var=0;
      if(isset($result['publications'])){
         foreach($result['publications'] as $x){
            $var +=1;
         }
      }
      $str = 'publications.p'.$var;
      $value = array("title" => $_POST['title'], "domain" => $_POST['domain'], 'year' => $_POST['year'], 'description'=> $_POST['description'], 'link'=>$_POST['link']);
      $myJSON = json_encode($value); 
      $updateResult =  $students->updateOne(     ['_id' => $s_id],     ['$set' => [$str => $value]] );
      if($updateResult){
         $qstring = 'Data Updated Successfully!';
      }else{
         $qstring = 'Error While Uploading Data. Contact Admin if error persists.';
      }
      header("Location: /demo/student_home.php?error=".$qstring);
   }  


   if(isset($_POST['addAchievement'])){
      $var=0;
      if(isset($result['achievements'])){
         foreach($result['achievements'] as $x){
            $var +=1;
         }
      }
      $str = 'achievements.a'.$var;
      $value = array("title" => $_POST['title'], "domain" => $_POST['domain'], 'year' => $_POST['year'], 'link' => $_POST['link']);
      $myJSON = json_encode($value); 
      $updateResult =  $students->updateOne(     ['_id' => $s_id],     ['$set' => [$str => $value]] );
      if($updateResult){
         $qstring = 'Data Updated Successfully!';
      }else{
         $qstring = 'Error While Uploading Data. Contact Admin if error persists.';
      }
      header("Location: /demo/student_home.php?error=".$qstring);
   }  
         

   if(isset($_POST['addParticipation'])){
      $var=0;
      if(isset($result['participation'])){
         foreach($result['participation'] as $x){
            $var +=1;
         }
      }
      $str = 'participation.p'.$var;
      $value = array("title" => $_POST['title'], "domain" => $_POST['domain'], 'link'=>$_POST['link']);
      $myJSON = json_encode($value); 
      $updateResult =  $students->updateOne(     ['_id' => $s_id],     ['$set' => [$str => $value]] );
      if($updateResult){
         $qstring = 'Data Updated Successfully!';
      }else{
         $qstring = 'Error While Uploading Data. Contact Admin if error persists.';
      }
      header("Location: /demo/student_home.php?error=".$qstring);
   }  

   if(isset($_POST['addTechskill'])){
      $var=0;
      if(isset($result['techskills'])){
         foreach($result['techskills'] as $x){
            $var +=1;
         }
      }
      $updateResult =  $students->updateOne(['_id' => $s_id],['$push' => ['techskills' => $_POST['skill']]]);
      if($updateResult){
         $qstring = 'Data Updated Successfully!';
      }else{
         $qstring = 'Error While Uploading Data. Contact Admin if error persists.';
      }
         header("Location: /demo/student_home.php?error=".$qstring);
   }  


   if(isset($_POST['clearTechskill'])){
      $var=[];
      if(isset($result['techskills'])){
         $updateResult =  $students->updateOne(['_id' => $s_id],['$set' => ['techskills' => $var]]);
         if($updateResult){
            $qstring = 'Data Updated Successfully!';
         }else{
            $qstring = 'Error While Uploading Data. Contact Admin if error persists.';
         }
      }else{
         $qstring("");
      }
      header("Location: /demo/student_home.php?error=".$qstring);
   }  

   if(isset($_POST['addNonTechSkill'])){
      $var=0;
      if(isset($result['ntechskills'])){
         foreach($result['ntechskills'] as $x){
            $var +=1;
         }
      }
      $updateResult =  $students->updateOne(['_id' => $s_id],['$push' => ['ntechskills' => $_POST['ntskill']]]);
      if($updateResult){
         $qstring = 'Data Updated Successfully!';
      }else{
         $qstring = 'Error While Uploading Data. Contact Admin if error persists.';
      }
         header("Location: /demo/student_home.php?error=".$qstring);
   }  

   if(isset($_POST['clearNTechskill'])){
      $var=[];
      if(isset($result['ntechskills'])){
         $updateResult =  $students->updateOne(['_id' => $s_id],['$set' =>['ntechskills' => $var]]);
         if($updateResult){
            $qstring = 'Data Updated Successfully!';
         }else{
            $qstring = 'Error While Uploading Data. Contact Admin if error persists.';
         }
      }else{
         $qstring("");
      }
   header("Location: /demo/student_home.php?error=".$qstring);
               }  
}else{
   header("Location: /demo/student_index.php");
}

if(isset($_POST['fdbk'])){
   $str = 'semesters.'.$_POST['sem'].'.'.$_POST['sub'].'.feedback';
   $updateRes = $students->updateOne([ '_id' => $s_id ], [ '$set'=> [ $str => $_POST['fdbk'] ] ]);
   if($updateRes){
      $qstring = 'Updated Responses Successfully!';
   }else{
      $qstring = 'Error While Updating Data. Contact Admin if error persists.';
   }
   header("Location: /demo/semester_records.php?error=".$qstring);
}  
?>