<?php
 require("teacher_fetcher.php");
  ?>

<html>
<head>
  <meta charset="utf-8">
  <title>Teacher Overview</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>body {font-family:'Open Sans', sans-serif;
	background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
    url(/images/bk.jpg) no-repeat center fixed;
  height: 100%;
  width: 100%;
  background-size: cover;
}
        .header{
            height: 200px;
        }
        .tpic{
            height: 200px;
            width: 200px;
            border-radius: 100%;
            padding: 10px;
            border: 2px solid grey;
            float: left;
            overflow: hidden;
            margin: 10px 0px 0px 20px;
        }
        h1{
            font-size: 48px;
            color:white;
            margin:30px 0px 0px 0px;
        }
        .headinfo{
            height: 20px;
            padding: 20px;
            float:left;
            color:white;
		 position: relative;
  				}

        .my-class{
            padding-top:100px;
            height: 290px;
            width:290px;
            border-radius: 100%;
            margin: auto;
            text-align: center;
            font-size: 35px; border:4px solid purple;           background:wheat;

        }
        .sub-class{
            padding-top:70px;
            width: 290px;
            height: 240px;
            border-radius: 15px;
            background:wheat;
            margin: 5px;
            text-align: center;
            font-size: 35px;
            float: left;
            text-transform:uppercase;border:4px solid purple;
        }
        
        .mentees{
            padding-top:60px;
            width: 200px;
            height: 200px;
            border-radius: 100%;
            background:wheat;
            margin: 20px;
            text-align: center;
            font-size: 48px;
            float: left;
            text-transform:uppercase;
            overflow-x:hidden;
        }
        .mentees:hover{
          box-shadow: 0px 0px 10px 10px rgba(122, 119, 119, 0.5);
        }
        h3{
           width: fit-content;
        	margin: 50px auto 20px;
          font-size:40px;
        	color:white;     
          text-align:left;  	
        }
        a:hover{
            text-decoration: none;
            color:black;
        }
        .my-class:hover, .sub-class:hover{
            cursor: pointer;
            text-decoration: none;
            box-shadow: 0px 0px 10px 10px rgba(122, 119, 119, 0.5);
        }  
    </style>
</head>
<body>
  <div class="header"><!--
    <div><img class="tpic" src="/demo/garima.jpg" alt="image unavailable"></div> -->
    <div class="headinfo"><h1>Welcome, Prof. <?php echo "".$result['name']; ?></h1>
    <p style="margin-top:10px"><span class="glyphicon glyphicon-earphone"></span><?php echo "".$result['phone'].""; ?> | <span class="glyphicon glyphicon-envelope"></span><?php echo " ".$result['mail'].""; ?></p>
    </div>
    <form  action='logout.php' method='post' ><input type='submit' name='logout' value='Logout' /></form>
  </div>

        <hr style="width:40%;margin: 30px auto;">
<?php if(isset($result['class'])){
  $_SESSION["class"]=$result['class'];
 echo "<h3>My Class</h3>
 <div class='my-class'><a href='/demo/teacher_class.php'>".$result['class']."</a></div>";
}
  ?>
         <hr style="width:40%;margin: 70px auto 30px;">

         <h3>My Subject Classes</h3>
        <div style="width:fit-content; margin: auto;height:210px">
        <?php
        if(isset($result['classlist'])){
for ($x = 0; $x < count($result['classlist']); $x++) {
 echo "<div class='sub-class'><a href='/demo/teacher_subject.php?class=".$result['classlist'][$x]."&sub=".$result['subjectlist'][$x]."&sem=".$result['semesterlist'][$x]."' >".$result['classlist'][$x]."<br>".$result['subjectlist'][$x]."</a></div>";

}}
?></div>
<hr style="width:40%;margin: 70px auto 30px;clear:left">
<h3>Mentees</h3>
<div style="width:fit-content; margin: auto">
        <?php
        if(isset($result['mentees'])){
for ($x = 0; $x < count($result['mentees']); $x++) {
  //echo "The number is: $x <br>";
 echo "<a href='student_data.php?id=".$result['menteesid'][$x]."&name=".$result['mentees'][$x]."' ><div class='mentees'>".$result['mentees'][$x]."</div></a>";
}
}
?>
       </div> 
</body>
</html>