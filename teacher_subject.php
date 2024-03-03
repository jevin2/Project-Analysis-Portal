<?php
 require("teacher_subjectclass_fetcher.php");

  ?>
  
  <!Doctype HTML><head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

  <title><?php echo "".$subclass."-".$sub ?></title>
  <style>
    
    * {
  font-family: "Trebuchet MS", sans-serif;
}
.upload {
  display: inline-block;
  text-align: center;
  padding-top: 10px;
  width: 320px;
  height: 60px;
  background-color: white;
  border-radius: 10px;
  margin:15px;
  float:left;
  text-align: center;
  font-size: 20px;
}
.upload:hover {
  background-color: rgb(44, 124, 145);
  color: rgb(255, 255, 255);
}
::placeholder {
  color: #000;}
.sub-stud {
  width: 850px;
  height: 170px;
  margin: auto;
  background-color: rgb(232, 245, 247);
  padding: 5px;
  border-radius: 15px;
  margin-top: 35px;
}

.name {
  float: left;
  height: 60px;
  width: 170px;
  font-size: 26px;
  margin: 10px 5px 10px 35px;
}

.marks {
  float: left;
  height: 20px;
  width: 110px;
  font-size: 20px;
  margin: 10px 5px 5px 20px;
  padding: 10px;
  border-radius: 50px;
  background-color: darkturquoise;
}
.at {
  float: left;
  height: 20px;
  width: 180px;
  font-size: 20px;
  margin: 10px 5px 10px 20px;
  padding: 10px;
  border-radius: 50px;
  background-color: darkturquoise;
}
.tw {
  float: left;
  height: 20px;
  width: 90px;
  font-size: 20px;
  margin: 10px 5px 10px 20px;
  padding: 10px;
  border-radius: 50px;
  background-color: darkturquoise;
}
.rating {
  float: left;
  height: 20px;
  width: 130px;
  font-size: 20px;
  margin: 10px 5px 10px 15px;
  padding: 10px;
  border-radius: 50px;
  background-color: darkturquoise;
}
.ratingedit {
    float: left;
  height: 20px;
  width: 70px;
  font-size: 12px;
  margin: 10px 5px 10px 15px;
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
    margin: 10px 5px 10px 5px;
    border: none;
    height: 40px;
    width: 100px;
    padding: 10px;
    float :left;
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
  
  
  .teacher{
            border-radius: 20px;
            width:100%px;
            height: 164px;
            padding: 10px;
        }
            .header{
                height: fit-content;
                padding: 25px;
            }
            .picture{
            border-radius: 100%;
            border: 2px solid grey;
            height: 160px;
            width: 160px;
            float: left;
        }
            .teacher-details{
                color:white;
                height: 84px;
                margin: 15px;margin-top:30px;
                float: left;
                font-size:15px;
            }
            h2{
            margin: 5px 0px;
            float: left;
            font-weight: 500;
            font-size:35px;
        }
        .class-overview{
            height: 84px;
            padding: 15px;
            border-left: 2px solid black;
            float: left;
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
.feedback{
  clear:left;
  background-color:DodgerBlue;
  border-radius:15px;
  padding: 5px;
  width: fit-content;
  margin-top:30px ;
  margin: auto;
  color: #fff;
  text-align:center;
  font-size:26px;
  font-style: italic;
}
.searchdiv{
            background-color: #b4b6d1;padding:10px;width: 150px;color:white;height: 40px;border-radius: 5px;display: flex;flex-direction: row;align-items: center;clear:left;margin:20px auto;
        }
        .search{
            all: unset; font: 16px system-ui;color: #fff; height: 100%; width: 100%;
        }
  </style>
</head>
<body>
            <button class="btn"><a href="/demo/teacher_home.php" style="text-decoration:none;color:white;"><i class="fa fa-home"></i> Home</a></button>
            
            <form class="upload" action="/demo/updateAcademicData.php" method="post" enctype="multipart/form-data">
            UPLOAD ACADEMIC DATA<input type="file" required name="file" />
            <input type="hidden" value="<?php echo ''.$sub?>" name="sub">
            <input type="hidden" value="<?php echo ''.$sem?>" name="sem">
            <input type="hidden" value="<?php echo ''.$subclass?>" name="class">
            <input type="submit" name="importSubmit" value="IMPORT">
        </form>

<div class="searchdiv">
                <input class="search" id="searchbar" type="text" name="search" placeholder="Search Student.." onkeyup="search()"/>
                <span class="glyphicon glyphicon-search" style="color: #fff; fill: currentColor;"></span>
            </div>
<hr style="width: 60%;margin: 20px auto;clear:left">

  <?php  
  #print_r($subclass);
            foreach ($result as $student) {
              echo "<div class='sub-stud'>";
              echo "<div class='name'>".$student['name']."<br>".$student['_id']."</div>";
              if(isset($student['semesters']->{$sem}->{$sub}->{'ut1'})){
                $ut1d=$student['semesters']->{$sem}->{$sub}->{'ut1'};
                $ut2d=$student['semesters']->{$sem}->{$sub}->{'ut2'};
                $twd=$student['semesters']->{$sem}->{$sub}->{'tw'};
                if(isset($student['semesters']->{$sem}->{$sub}->{'rating'})){
                  $ratd=$student['semesters']->{$sem}->{$sub}->{'rating'};
                }else{
                  $ratd='-';
                }
                $attd=$student['semesters']->{$sem}->{$sub}->{'attendance'};
              }else{
                $ut1d='-';
                $ut2d='-';
                $twd='-';
                $attd='-';
                $ratd='-';
              }
              
                
              echo "<div class='marks'>UT1: ".$ut1d."</div>";
              echo "<div class='marks'>UT2: ".$ut1d."</div>";
              echo "<div class='tw'>TW:".$twd."</div>";
              echo "<div class='at'>ATTENDANCE: ".$attd." %</div>";
              echo "<div class='rating'>RATING: ".$ratd."/5</div>";
              echo "<form action='/demo/updateAcademicData.php' method='post'>
              <input type='hidden' value=".$sub." name='sub'>
              <input type='hidden' value=".$sem." name='sem'>
              <input type='hidden' value=".$student['_id']." name='roll_no'>
              <input type='hidden' value=".$subclass." name='class'><input type='text' required class='ratingedit' placeholder='Edit rating' name='rating'; /><input type='submit' name='editRating' class='sub' value='Submit' /></form>";
              #print_r($subclass);
              if(isset($student['semesters']->{$sem}->{$sub}->{'feedback'})){
                echo "<div class='feedback'>Student Feedback: ".$student['semesters']->{$sem}->{$sub}->{'feedback'}."</div></div>";
              }else{
                echo '</div>';
              }
            }?>
    
  
  <script>
    // JavaScript code
function search() {
let input = document.getElementById('searchbar').value
input=input.toLowerCase();
let x = document.getElementsByClassName('sub-stud');
if(input != ""){
for (i = 0; i < x.length; i++) {
  if (!x[i].innerHTML.toLowerCase().includes(input)) {
    x[i].style.display="none";
  }
  else{
  x[i].style.display="block";
}
}
}
}

  </script>
</body>
