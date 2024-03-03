<?php
session_start();
if(isset($_SESSION["id"])){
    require 'vendor/autoload.php';
$client = new MongoDB\Client;
$db = $client->demo;
$students = $db->students;
if(isset($_POST['importSubmit'])){
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
    // Validate whether selected file is a CSV file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        
        // If the file is uploaded
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            // Skip the first line
            fgetcsv($csvFile);
            $ut1 = "semesters.".$_POST['sem'].".".$_POST['sub'].".ut1";
            $ut2 = "semesters.".$_POST['sem'].".".$_POST['sub'].".ut2";
            $tw = "semesters.".$_POST['sem'].".".$_POST['sub'].".tw";
            $attendance = "semesters.".$_POST['sem'].".".$_POST['sub'].".attendance";
            // Parse data from CSV file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                // Get row data
                $roll_no   = $line[0];
                $ut11 = $line[1]."/".$line[3];
                $ut22 = $line[2]."/".$line[3];
                $tw1 = $line[4]."/".$line[5];
                $att  = intval($line[6]/$line[7]*100);
                $updateResult = $students->updateOne(

                    [ '_id' => $roll_no ],
                 
                    [ '$set' => [$ut1=>$ut11] ]
                 
                 );
                
                $updateResult = $students->updateOne(

                    [ '_id' => $roll_no ],
                 
                    [ '$set' => [$ut2=>$ut22] ]
                 
                 );
                
                $updateResult = $students->updateOne(

                    [ '_id' => $roll_no ],
                 
                    [ '$set' => [$tw=>$tw1] ]
                 
                 );
                $updateResult = $students->updateOne(

                    [ '_id' => $roll_no ],
                 
                    [ '$set' => [$attendance=>$att] ]
                 
                 );
                }
            
            // Close opened CSV file
            fclose($csvFile);
            
            $qstring = 'succ';
        }else{
            $qstring = 'err';
        }
    }else{
        $qstring = 'invalid_file';
    }
    $sem1=substr($_POST['sem'],-1,1);
    //echo $sem1;
    $class=$_POST['class'];
    echo $class;
    $sub=$_POST['sub'];
    echo $sub;
// Redirect to the listing page
header("Location: teacher_subject.php?class=".$class."&sem=".$sem1."&sub=".$sub."&error=".$qstring);
}

if(isset($_POST['editRating'])){
    
    $str = "semesters.".$_POST['sem'].".".$_POST['sub'].".rating";
    $updateResult = $students->updateOne(

        [ '_id' => $_POST['roll_no'] ],
     
        [ '$set' => [$str=>$_POST['rating']] ]
     
     );
     if($updateResult){
         $qstring='succ';
     }else{
         $qstring='err';
     }
     $sem1=substr($_POST['sem'],-1,1);
     $qry = array("_id"=> $_POST['roll_no']);
     $result = $students->findOne($qry);
    $class=$result['class'];
    $sub=$_POST['sub'];
     header("Location: teacher_subject.php?class=".$class."&sem=".$sem1."&sub=".$sub."&error=".$qstring);
}
}else{
    header("Location: /demo/teacher_index.php");
}
?>