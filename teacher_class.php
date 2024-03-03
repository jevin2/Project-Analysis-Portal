<?php
 require("teacher_class_fetcher.php");
 
  ?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>My Class</title>
        <META http-equiv="Content-Type" content="text/html; charset=utf-8">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <script src="https://kit.fontawesome.com/d7a36f6c74.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
            <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
            <link
    href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet"
  />
        <style>
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
}
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
  float:right;
  border-radius:0px;
  margin:10px;
}.btn:hover {
  background-color: RoyalBlue;
}
        
        .searchdiv{
            background-color: #b4b6d1;padding:10px;width: 150px;color:white;height: 40px;border-radius: 5px;display: flex;flex-direction: row;align-items: center;margin: auto;clear:right;
        }
        .search{
            all: unset; font: 16px system-ui;color: #fff; height: 100%; width: 100%;
        }
        .student{clear:left;
            width: 900px;
            height: 400px;
            margin:20px auto;
            background:rgb(232, 245, 247);
            border-radius: 15px;
            padding:15px;
            overflow-y: scroll;
        }
        .student-name{
            font-size:20px;
            font-weight:800;
            padding:3px 10px;
            float:left;
            background-color: darkturquoise;
            border-top-left-radius: 50px;
            border-bottom-left-radius:50px;
            width:250px;
            margin-bottom:20px;
        }

        .student-contact{
            float:left;            font-weight:800;

            font-size:20px;
            padding:3px 12px;
            float:left;
            background-color: darkturquoise;
            width:300px;
        }
        .student-cgpa{
            float:left;
            width:135px;
            text-align:center;
            font-size: 40px;
            height:73.13px;            font-weight:800;

            background-color: darkturquoise;
        }
        .student-rating{
            font-size: 40px;width:135px;text-align:center;
            float:left;
            border-top-right-radius: 50px;
            border-bottom-right-radius:50px;
            height:73.13px;            font-weight:800;

            background-color: darkturquoise;
        }
        .skill{
            float:left;
            clear:left;
            display: block;
        }
        .swot{
            float:left;
            display:block;
        }
        a{
            text-decoration: none;
            color: black;
        }
        .stud-link{
            clear:left;
            float:center;
            text-decoration: none;
            font-size: 20px;
            background-color:rgb(31, 85, 156);color:white;text-align:center;
            padding:10px;
            border-radius:40px;color:white;
        }
        .stud-link a{
            color:white;
        }

        .a:hover{
            cursor: pointer;
        }
        .skill p{
            border-radius:50px;
            background-color:darkturquoise;
            border-radius:50px;
            font-weight:800;
font-size:18px;
            padding:10px;
            text-align:center;
            float:left;
        }
        .swot p{
            border-radius:50px;
            background-color:darkturquoise;
            padding:10px;            font-weight:800;float:left;
            font-size:18px;
            text-align:center;
        }
        #toggleProject{
            color:white;
        }
        table.tab {
  border-collapse: collapse;
  margin: 10px auto;
  font-size: 15px;
  min-width: 400px;
  max-width:90%;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2), 0 0 10px rgba(0, 0, 0, 0.2);
}
.tab thead tr {
  background-color: #59067a;
  color: #ffffff;
  text-align: left;
}
.tab th,
.tab td {
  padding: 12px 15px;
  font-weight: bold;
}

.tab tbody tr {
  border-bottom: 1px solid #dddddd;
}

.tab tbody tr:nth-of-type(even) {
  background-color:#a478b6;
  color:black;
}
.tab tbody tr:nth-of-type(odd) {
  background-color:azure;
  color:black;
}

.tab tbody tr:last-of-type {
  border-bottom: 2px solid #530372;
}
.tab tbody tr.active-row {
  font-weight: bold;
  color: black;
}
.total{
  text-align: center;
}.shitbut2{
        background-color:rgb(31, 85, 156);
        height: 40px;
        font-size: 15px;
        border-radius: 10px;
        padding-top: 3px;
        color: white;
        border: none;
        margin: 3px;
        width: fit-content;
      }
      h3{
          text-align:center;
          color:white;
      }
        </style>
    </head>
    <body>
    <!--
    <button class="btn"><i class="fa fa-sign-out"></i> Logout</button>
    --><a href="teacher_home.php"><button class="btn"><i class="fa fa-home"></i> Home</button></a>
    <?php echo "<h2 style=color:white;text-align:center;clear:right;>CLASS: ".$class."</h2>";?>
    <div><button  class="searchdiv" style='margin:20px auto;border:none;color:black'onclick="togglePanel()">View Insights Panel</button></div>
        
            
            <hr style="width: 40%;margin: 20px auto;clear:left">
        <div id='togglePanel' style="display:none">
        <div style="width:fit-content;margin:auto">
  <button  class="shitbut2"  id="b1" style="clear:left" onclick="toggleProject()">View Projects</button>
  <button  class="shitbut2"  id="b2" style="clear:left" onclick="toggleInternship()">View Internships</button>
  <button  class="shitbut2"  id="b3" style="clear:left" onclick="toggleCourse()">View Courses</button>
  <button  class="shitbut2"  id="b4" style="clear:left" onclick="togglePublication()">View Publications</button>
  <button  class="shitbut2"  id="b5" style="clear:left" onclick="toggleAchievement()">View Achievements</button>
  <button  class="shitbut2"  id="b6" style="clear:left" onclick="toggleParticipation()">View Participation</button></div>


<div id="toggleProject" class="cou" style='display:none'>
<h3 style="text-align:center;">Project Count: <?php echo "".count($projects);?></h3>

<table class="tab"><thead>
<tr>
  <th>Domain</th>
  <th>Count</th>
  </thead>
      <tbody>
  <?php 
foreach($freq as $domain => $count)
  echo "<tr><td>".$domain."</td><td>".$count."</td></tr>";
  ?>
  </tbody></table>
<table class="tab"><thead>
        <tr>
          <th>TITLE</th>
          <th>DOMAIN</th>
          <th>DESCRIPTION</th>
          <th>TECH-STACK</th>
          <th>LINK</th>
        </tr>
      </thead>
      <tbody>
    <?php
    $result = $students->find($qry);
    foreach($result as $student){
        if(isset($student['projects']) && count($student['projects']) >= 1){
            foreach($student['projects'] as $p){
                echo "<tr><td>".$p['title']."</td><td>".$p['domain']."</td><td>".$p['description']."</td><td>".$p['tech-stack']."</td><td>".$p['link']."</td></tr>";
            }
        }
    }?>
</tbody></table>
      </div>
  
 
<div id="toggleInternship" class="cou" style='display:none'>
<h3 style="text-align:center;">Total No. Of Internships: <?php echo "".count($internships);?></h3>
<table class="tab"><thead>
<tr>
  <th>Domain</th>
  <th>Count</th>
  </thead>
      <tbody>
<?php 
foreach($freq1 as $domain => $count)
  echo "<tr><td>".$domain."</td><td>".$count."</td></tr>";
  ?>
  </tbody></table>
<table class="tab"><thead>
        <tr>
          <th>POSITION</th>
          <th>DOMAIN</th>
          <th>COMPANY</th>
          <th>DURATION</th>
          <th>LINK</th>
        </tr>
      </thead>
      <tbody>
    <?php
    $result = $students->find($qry);
    foreach($result as $student){
        if(isset($student['internships']) && count($student['internships']) >= 1){
            foreach($student['internships'] as $p){
                echo "<tr><td>".$p['position']."</td><td>".$p['domain']."</td><td>".$p['company']."</td><td>".$p['duration']." Month(s)</td><td>".$p['link']."</td></tr>";
            }
        }
    }?>
</tbody></table>
      </div>

 
  
<div id="toggleCourse" class="cou" style='display:none'>
<h3 style="text-align:center;">Total No. Of Courses: <?php echo "".count($courses);?></h3>
<table class="tab"><thead>
<tr>
  <th>Domain</th>
  <th>Count</th>
  </thead>
      <tbody>
<?php 
foreach($freq2 as $domain => $count)
  echo "<tr><td>".$domain."</td><td>".$count."</td></tr>";
  ?>
  </tbody></table>
  <h3 style="text-align:center;">Course Platform(s)</h3>
  <table class="tab"><thead>
<tr>
  <th>Platform</th>
  <th>Count</th>
  </thead>
      <tbody>
<?php 
foreach($freq22 as $domain => $count)
  echo "<tr><td>".$domain."</td><td>".$count."</td></tr>";
  ?></tbody></table>
<table class="tab"><thead>
        <tr>
          <th>TITLE</th>
          <th>DOMAIN</th>
          <th>DURATION</th>
          <th>PLATFORM</th>
          <th>LINK</th>
        </tr>
      </thead>
      <tbody>
    <?php
    $result = $students->find($qry);
    foreach($result as $student){
        if(isset($student['courses']) && count($student['courses']) >= 1){
            foreach($student['courses'] as $p){
                echo "<tr><td>".$p['title']."</td><td>".$p['domain']."</td><td>".$p['duration']." Hour(s)</td><td>".$p['platform']."</td><td>".$p['link']."</td></tr>";
            }
        }
    }?>
</tbody></table>
      </div>

  
<div id="toggleAchievement" class="cou" style='display:none'>
<h3 style="text-align:center;">Total No. Of Achievements: <?php echo "".count($achievements);?></h3>
<table class="tab"><thead>
<tr>
  <th>Domain</th>
  <th>Count</th>
  </thead>
      <tbody>
<?php 
foreach($freq3 as $domain => $count)
  echo "<tr><td>".$domain."</td><td>".$count."</td></tr>";
  ?>
  </tbody></table>
<table class="tab"><thead>
        <tr>
          <th>TITLE</th>
          <th>DOMAIN</th>
          <th>YEAR</th>
          <th>LINK</th>
        </tr>
      </thead>
      <tbody>
    <?php
    $result = $students->find($qry);
    foreach($result as $student){
        if(isset($student['achievements']) && count($student['achievements']) >= 1){
            foreach($student['achievements'] as $p){
                echo "<tr><td>".$p['title']."</td><td>".$p['domain']."</td><td>".$p['year']."</td><td>".$p['link']."</td></tr>";
            }
        }
    }?>
</tbody></table>
      </div>


  
<div id="togglePublication" class="cou" style='display:none'>
<h3 style="text-align:center;">Total No. Of Publications: <?php echo "".count($publications);?></h3>
<table class="tab"><thead>
<tr>
  <th>Domain</th>
  <th>Count</th>
  </thead>
      <tbody>
<?php 
foreach($freq4 as $domain => $count)
  echo "<tr><td>".$domain."</td><td>".$count."</td></tr>";
  ?>
  </tbody></table>
<table class="tab"><thead>
        <tr>
          <th>TITLE</th>
          <th>DOMAIN</th>
          <th>YEAR</th>
          <th>DESCRIPTION</th>
          <th>LINK</th>
        </tr>
      </thead>
      <tbody>
    <?php
    $result = $students->find($qry);
    foreach($result as $student){
        if(isset($student['publications']) && count($student['publications']) >= 1){
            foreach($student['publications'] as $p){
                echo "<tr><td>".$p['title']."</td><td>".$p['domain']."</td><td>".$p['year']."</td><td>".$p['description']."</td><td>".$p['link']."</td></tr>";
            }
        }
    }?>
</tbody></table>
      </div>

  
<div id="toggleParticipation" class="cou" style='display:none'>
<h3 style="text-align:center;">Total No. Of Participation: <?php echo "".count($participation);?></h3>
<table class="tab"><thead>
<tr>
  <th>Domain</th>
  <th>Count</th>
  </thead>
      <tbody>
<?php 
foreach($freq5 as $domain => $count)
  echo "<tr><td>".$domain."</td><td>".$count."</td></tr>";
  ?>
  </tbody></table>
<table class="tab"><thead>
        <tr>
          <th>TITLE</th>
          <th>DOMAIN</th>
          <th>LINK</th>
        </tr>
      </thead>
      <tbody>
    <?php
    $result = $students->find($qry);
    foreach($result as $student){
        if(isset($student['participation']) && count($student['participation']) >= 1){
            foreach($student['participation'] as $p){
                echo "<tr><td>".$p['title']."</td><td>".$p['domain']."</td><td>".$p['link']."</td></tr>";
            }
        }
    }?>
</tbody></table>
      </div><hr style="width: 40%;margin: 20px auto;"></div>
      <div class="searchdiv">
                <input class="search" id="searchbar" type="text" name="search" placeholder="Search Student.." onkeyup="search()"/>
                <span class="glyphicon glyphicon-search" style="color: #fff; fill: currentColor;"></span>
            </div>
            <?php //215 
            $options = ['sort' => ['_id' => 1]];
            $result = $students->find($qry,$options);
            foreach ($result as $student) {
                $sname= $student['name'];
                $sid = $student['_id'];
                echo "<div class='student'>";
                echo "<div class='student-name'><p style='margin:5px;'>".$student['name']."<br>".$student['_id']."</p></div>";
                echo "<div class='student-contact'><p style='margin:5px;'>".$student['phone']."<br>".$student['mail']."</p></div>";
                echo "<div class='student-cgpa'><p style='margin:5px;'>".$student['cgpa']."</p></div>";
                echo "<div class='student-rating'><p style='margin:5px;'>".$student['ratings']."</p></div>";

                echo "<div class='skill'><p style='margin:5px;background-color:rgb(31, 85, 156);color:white;font-size:20px;font-weight:900'>Tech Skills: </p>";
                if(isset($student['techskills'])){
                foreach ($student['techskills'] as $skill) {
                    echo "<p style='margin:5px;'>".$skill."</p>";
                }}else{
                    echo "<p style='margin:5px;'>Data not updated.</p>";
                }

                echo "</div><div class='skill' style='clear:left;'><p style='margin:5px;background-color:rgb(31, 85, 156);color:white;font-size:20px;font-weight:900'>Non-Tech Skills: </p>";
                if(isset($student['ntechskills'])){
                foreach ($student['ntechskills'] as $nskill) {
                    echo "<p style='margin:5px;'>".$nskill."</p>";
                }}else{
                    echo "<p style='margin:5px;'>Data not updated.</p>";
                }
                
                echo "</div><div class='swot' style='clear:left;'><p style='margin:5px;background-color:rgb(31, 85, 156);color:white;font-size:20px;font-weight:700'>Strength(s): </p>";
                if(isset($student['strength'])){
                foreach ($student['strength'] as $s) {
                    echo "<p style='margin:5px;'>".$s."</p>";
                }}else{
                    echo "<p style='margin:5px;'>Data not updated.</p>";
                }
                
                echo "</div><div class='swot' style='clear:left;' ><p style='margin:5px;background-color:rgb(31, 85, 156);color:white;font-size:20px;font-weight:700'>Weaknesses(s): </p>";
                if(isset($student['weakness'])){
                    foreach ($student['weakness'] as $w) {
                    echo "<p style='margin:5px;'>".$w."</p>";
                }}else{
                    echo "<p style='margin:5px;'>Data not updated.</p>";
                }
                echo "</div><div class='swot' style='clear:left;'><p style='margin:5px;background-color:rgb(31, 85, 156);color:white;font-size:20px;font-weight:700'>Opportunities: </p>";
                if(isset($student['opportunity'])){
                    foreach ($student['opportunity'] as $o) {
                    echo "<p style='margin:5px;'>".$o."</p>";
                }}else{
                echo "<p style='margin:5px;'>Data not updated.</p>";
            }
            echo "</div><div class='swot' style='clear:left;'><p style='margin:5px;background-color:rgb(31, 85, 156);color:white;font-size:20px;font-weight:700'>Threat(s): </p>";
            if(isset($student['threat'])){
                foreach ($student['threat'] as $t) {
                    echo "<p style='margin:5px;'>".$t ."</p>";
                }}else{
                    echo "<p style='margin:5px;'>Data not updated.</p>";
                }
                echo "</div>";
                echo "<div class='stud-link'><a href='student_data.php?id=$sid&name=$sname'><i class='fas fa-external-link-alt'></i> View Student Data</a></div></div>";
            }
            ?>
           
        <script type="text/Javascript">
         function togglePanel() {
  var x = document.getElementById("togglePanel");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
    y.style.backgroundColor = "rgb(31, 85, 156)";
  }
}
        function toggleProject() {
  var x = document.getElementById("toggleProject");
  var y = document.getElementById("b1");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.backgroundColor = "darkturquoise";
  } else {
    x.style.display = "none";
    y.style.backgroundColor = "rgb(31, 85, 156)";
  }
}

function toggleInternship() {
  var x = document.getElementById("toggleInternship");
  var y = document.getElementById("b2");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.backgroundColor = "darkturquoise";
  } else {
    x.style.display = "none";
    y.style.backgroundColor = "rgb(31, 85, 156)";
  }
}
function toggleCourse() {
  var x = document.getElementById("toggleCourse");
  var y = document.getElementById("b3");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.backgroundColor = "darkturquoise";
  } else {
    x.style.display = "none";
    y.style.backgroundColor = "rgb(31, 85, 156)";
  }
}
function togglePublication() {
  var x = document.getElementById("togglePublication");
  var y = document.getElementById("b4");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.backgroundColor = "darkturquoise";
  } else {
    x.style.display = "none";
    y.style.backgroundColor = "rgb(31, 85, 156)";
  }
}
function toggleAchievement() {
  var x = document.getElementById("toggleAchievement");
  var y = document.getElementById("b5");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.backgroundColor = "darkturquoise";
  } else {
    x.style.display = "none";
    y.style.backgroundColor = "rgb(31, 85, 156)";
  }
}
function toggleParticipation() {
  var x = document.getElementById("toggleParticipation");
  var y = document.getElementById("b6");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.backgroundColor = "DarkTurquoise";
  } else {
    x.style.display = "none";
    y.style.backgroundColor = "rgb(31, 85, 156)";
  }
}
            function search() {
                let input = document.getElementById('searchbar').value;
                input=input.toLowerCase();
                let x = document.getElementsByClassName('student');
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
            
    </body></html>