<?php
 require("student_semrec_fetcher.php");

  ?>
  
  <!Doctype HTML><head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

  <title><?php echo "".$id."-".$result['name']?></title>
  <style>
    
    * {
  font-family: "Trebuchet MS", sans-serif;
}

::placeholder {
  color: #fff;
  padding-top: 20px;
  text-align:center;
  font-size:26px;
  font-style: italic;}
.sub-stud {
  width: 850px;
  height: 180px;
  margin: auto;
  background-color: rgb(232, 245, 247);
  padding: 5px;
  border-radius: 15px;
  margin-top: 35px;
}

.name {
  text-align:center;
  font-size: 26px;
  margin: 25px 5px 15px;
}

.marks {
  float: left;
  height: 20px;
  width: 110px;
  font-size: 20px;
  margin: 10px 15px;
  padding: 10px;
  border-radius: 50px;
  background-color: darkturquoise;
}
.at {
  float: left;
  height: 20px;
  width: 180px;
  font-size: 20px;
  margin: 10px 10px;
  padding: 10px;
  border-radius: 50px;
  background-color: darkturquoise;
}
.tw {
  float: left;
  height: 20px;
  width: 90px;
  font-size: 20px;
  margin: 10px 15px;
  padding: 10px;
  border-radius: 50px;
  background-color: darkturquoise;
}
.rating {
  float: left;
  height: 20px;
  width: 130px;
  font-size: 20px;
  margin: 10px 10px;
  padding: 10px;
  border-radius: 50px;
  background-color: darkturquoise;
}
.ratingedit {
    clear:left;
  height: 20px;
  width: 500px;
  font-size: 12px;
  margin: 10px 10px;
  padding: 10px;
  border-radius: 50px;
  background-color: rgb(133, 233, 235);
  border:none;
  outline :none;
}
.sub {
    background-color: rgb(31, 85, 156);
    color: rgb(255, 255, 255);
    font-size: 15;
    border-radius: 20px;
    margin: 10px 15px;
    border: none;
    height: 40px;
    width: 100px;
    padding: 10px;
  }
  .sub:hover {
    background-color: rgb(126, 149, 212);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5), 0 0 10px rgba(0, 0, 0, 0.5);
    color: black;
    transition:opacity 0.15s ease-in-out;
  }
  body {font-family:'Open Sans', sans-serif;
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
  float:right;
  border-radius:0px;
  margin-top:10px;
}.btn:hover {
  background-color: RoyalBlue;
}
  
  
        
                 .btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
  float:right
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
  </style>
</head>
<body>
            <button class="btn"><a href="/demo/teacher_home.php" style="text-decoration:none;color:white;"><i class="fa fa-home"></i> Home</a></button>
            

  <?php 
  $semester = 'sem'.$result['semester']; 
  if(isset($result['semesters'])){
            foreach ($result['semesters'] as $sem=>$sub) {
                
                foreach($sub as $name=>$rec){
                    
              echo "<div class='sub-stud'>";
              echo "<div class='name'>".$name."</div>";
              echo "<div class='marks'>UT1: ".$rec['ut1']."</div>";
              echo "<div class='marks'>UT2: ".$rec['ut1']."</div>";
              echo "<div class='tw'>TW:".$rec['tw']."</div>";
              echo "<div class='at'>ATTENDANCE: ".$rec['attendance']." %</div>";
              if(isset($rec['rating'])){
                echo "<div class='rating'>RATING: ".$rec['rating']."/5</div></div>";
            }else{
                echo "<div class='rating'>RATING: -/5</div></div>";
            }
            }
        }}else{
          echo "<div class='sub-stud'><div class='name'>No Data Records</div></div>";
        }?>
    
  </body>
