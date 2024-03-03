<?php
session_start();
$index = "teacher_index";
    if(($_SESSION['type'])==='student'){
        $index = "student_index";
    }
session_unset();
session_destroy();
header("Location: $index.php");    
?>