<?php
 require("student_data_fetcher.php");
?>
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html lang="en">
    <head>
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"/>
      <script src="https://kit.fontawesome.com/d7a36f6c74.js" crossorigin="anonymous"></script>
      <title><?php echo "".$result['name']; ?></title>
    </head>
    <style>
      body {
        font-family: "Open Sans", sans-serif;
        background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	      background-size: 400% 400%;
	      animation: gradient 15s ease infinite;
        width: 100%;
        height: 100%;
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

      hr {
        clear:left;
        width: 70%;
        margin: auto;
        margin-top: 20px;
      }
      .header {
        height: 150px;
      }
      .headinfo{
        float: left;
      }
      .headinfo p {
        width: fit-content;
      }
      .gauge {
        height: 210px;
        width: 210px;
        border-radius: 100%;
        padding: 5px;
        background-color: purple;
        margin: 15px;
        float: left;
      }
      .data {
        height: 90px;
        width: 90px;
        border-radius: 100%;
        background-color: white;
        text-align: center;
        padding: 60px;
        font-size: 30px;
      }
      .tech {
        width: 651px;
        height: 160px;
        float: left;
      }
      .shitbut {
        background-color: blueviolet;
        height: 30px;
        font-size: 25px;
        margin: 5px;
        border-radius: 25px;
        float: left;
        padding: 10px;
        color: white;
      }
      .navbar{
        float:right;
        margin: 5px;
        padding: 5px;
        width: 440px;
      }
      .shitbut1{
        background-color: blueviolet;
        height: 40px;
        font-size: 15px;
        border-radius: 10px;
        padding-top: 3px;
        color: white;
        border: none;
        float:right;
        margin: 3px;
        width: 100px;
      }
      .shitbut2{
        background-color: blueviolet;
        height: 40px;
        font-size: 15px;
        border-radius: 10px;
        padding-top: 3px;
        color: white;
        border: none;
        margin: 3px;
        width: 120px;
      }
      .swot {
        border-radius: 15px;
        background-color: white;
        height: 180px;
        float: left;
        font-size: 20px;
        font-style: oblique;
        color: purple;
        margin: 8px;
        width: 160px;
        padding: 10px;
      }
      .swot:hover {
        box-shadow: 0px 0px 10px 10px rgba(122, 119, 119, 0.5);
      }
      .ques {
        background-color: white;
        margin: 10px;
        font-size: 20px;
        border-radius: 25px;
        padding: 10px;
        float: left;
        font-style: italic;
      }

      .tile {
        width: 350px;
        height: 400px;
        background-color: white;
        border-radius: 15px;
        margin: 10px;
        float: left;
      }
      .tile:hover {
        box-shadow: 0px 0px 10px 10px rgba(139, 136, 136, 0.5);
      }
      .tile-picture {
        height: 140px;
        width: 140px;
        border: 2px solid grey;
        border-radius: 100%;
        margin: 10px;
        float: left;
      }
      .project-title {
        height: 94px;
        width: 166px;
        border-radius: 30%;
        margin: 10px;
        margin-left: 0px;
        float: left;
        font-size: 25px;
        padding-top: 30px;
      }
      .details {
        height: 150px;
        margin: 10px;
        margin-top: 166px;
        font-style: italic;
      }
      .quesform{
        width:fit-content;
        margin:auto;
      }
      .quesform p{
        background-color: DodgerBlue;
        color: white;
        border-radius: 15px;
        padding: 5px;
        font-size: 20px;
        width:fit-content;
        float:left;
        font-style:italic;
        margin:10px;
      }
      .swotele{
        background-color: DarkTurquoise;
        color: white;
        border-radius: 15px;
        padding: 5px;
        font-size: 20px;
        width:fit-content;
        float:left;
        font-style:italic;
        margin:5px 5px 30px;
        border: none;
      }
      #dem1{
        width: fit-content;
        height:200px ; 
        margin:auto;
      }
      #dem2{
        color: green;
      }
      #noti{
        clear:left;
        clear:right;
        width:fit-content;
        margin:auto;
        font-style:none;
        background-color:DodgerBlue;
        border-radius:10px;
        color:white;
        text-align:center;
        padding:15px;
      }
      #error{
          width: fit-content;
          margin: 10px auto;
          background-color: DarkTurquoise;
          color: white;
          font-style:italic;
          padding:15px;
          text-align:center;
          border-radius:15px;
      }
      .ext{ clear:left;
  width:fit-content;
  margin: 40px auto 60px;
  padding: 10px;
  font-size:20px;
  border: 1px solid white;
  border-radius:5px;
  text-decoration: none;
  color:white;
}
.ext:hover{
  cursor:pointer;
  background-color:azure;
  color: DodgerBlue;
}
    </style>
    <body>
    <?php if (isset($_GET['error'])) { ?>
            <p id="error"><?php echo 'Server Message: '.$_GET['error']; ?></p>
          <?php } ?>

<div class="header">
  <div class="headinfo">
    <h1 style="color: azure; font-size: 30px"><?php echo "".$result['name'];?></h1>
    <p style="color: azure; font-size: 20px">
      <i class="fas fa-phone-square-alt"></i> <?php echo "".$result['phone'];?> |
      <i class="fas fa-envelope"></i> <?php echo "".$result['mail'];?>
    </p>
  </div></div>
  <a href="/demo/student_semester_records.php?id=<?php echo $result['_id'];?>" class= "ext"><i class='fas fa-external-link-alt'></i> VIEW SEMESTER RECORD</a>
      <hr>


      <h1 style="color: azure; text-align:center;font-size: 30px">EDUCATIONAL RECORD</h1>
      <div id="update" style="height: 285.2; width: 800px;border: 2px solid white;background-color: wheat; border-radius: 20px; margin: 20px auto 10px;">
        <div style="height: 250px; width: max-content; margin: auto">
          <div class="gauge">
            <div class="data">CET<br /><?php echo "".$result['edu'][0];?></div>
          </div>
          <div class="gauge">
            <div class="data">HSC<br /><?php echo "".$result['edu'][2];?></div>
          </div>
          <div class="gauge">
            <div class="data">SSC<br /><?php echo "".$result['edu'][3];?></div>
          </div>
        </div>
      </div>

      <hr>
      
      <h1 style="color: azure; text-align:center;font-size: 30px">QUESTIONAIRRE</h1>
      <div id="update" style=" margin: 20px auto 0px;height:fit-content;">
        <div id=dem1>
            <div class=ques>Forced to take Engineering?: <b id=dem2><?php if(isset($result['ques'])){ echo "".$result['ques'][0] ;}?></b></div>
            <div class=ques>Working and Studying?: <b id=dem2><?php if(isset($result['ques'])){ echo "".$result['ques'][1];} ?></b></div>
            <div class=ques>Living in a Hostel or PG?: <b id=dem2><?php  if(isset($result['ques'])){echo "".$result['ques'][2];} ?></b></div>
            <br>
            <div class=ques>Communication Skills: <b id=dem2><?php  if(isset($result['ques'])){echo "".$result['ques'][3];} ?></b></div>
            <br>
            <div class=ques>Any other attractions?: <b id=dem2><?php  if(isset($result['ques'])){echo "".$result['ques'][4].". ";}?></b>

        <?php 
         if(isset($result['ques'][4])){
        $val = strtolower($result['ques'][4]);
        if(str_contains($val,'yes')){
            for($i = 5;$i < count($result['ques']);$i++){
              echo "<b id=dem2>".$result['ques'][$i]."</b>";
            }
        }
      }?></div></div>


      <hr>
      
      <h1 style="color: azure; text-align:center;font-size: 30px">PG QUESTIONAIRRE</h1>
      <div id="update" style=" margin: 20px auto 10px;">
      <div id=dem1 style="height:150px;">
        <div class=ques>Planning for further studies?: <b id=dem2><?php echo "".$result['masters'][0] ?></b></div>
        <?php 
        
        $val = strtolower($result['masters'][0]);
        if(str_contains($val,'yes')){
            echo "<div class=ques>Planning to study abroad?: <b id=dem2>".$result['masters'][1]."</b></div>";
            echo "<div class=ques>Preparing for competitive exams?: <b id=dem2>".$result['masters'][2].".</b>";
        }
        if(str_contains(strtolower($result['masters'][0]),'yes')){
        $var = strtolower($result['masters'][2]);
        if(str_contains($val,'yes')){
            for($i = 3;$i < count($result['masters']);$i++){
              echo "<b id=dem2> ".strtoupper($result['masters'][$i])."</b>;";
            }
        } }echo "</div>"?>
        
    </div>
      </div>

      <hr>
      
      <h1 style="color: azure; text-align:center;font-size: 30px">SWOT ANALYSIS</h1>
      <div id="update" style="height: 280; width: 800px;border: 2px solid white;background-color: wheat; border-radius: 20px; margin: 40px auto 10px;clear:left">
    <div id=dem1 style="height: 220px;">
        <div class=swot><?php if(isset($result['strength'])){foreach($result['strength'] as $x){ echo " $x<br>";}}else{
  echo "Data not updated";}?></div>
        <div class=swot><?php if(isset($result['weakness'])){foreach($result['weakness'] as $x){ echo "$x <br>";}}else{
  echo "Data not updated";}?></div>
        <div class=swot><?php if(isset($result['opportunity'])){foreach($result['opportunity'] as $x){ echo "$x <br>";}}else{
  echo "Data not updated";}?></div>
        <div class=swot><?php if(isset($result['threat'])){foreach($result['threat'] as $x){ echo "$x <br>";}}else{
  echo "Data not updated";}?></div>
    </div>
      </div>
      
      <hr>
      
      <h1 style="color: azure; text-align:center;font-size: 30px">Technical Skills</h1>
      <div id="update" style="height: 285.2; width: 800px;border: 2px solid white;background-color: wheat; border-radius: 20px; margin: 20px auto 10px;">
        <div id=dem1>
          <div class=tech>
            <?php if(isset($result['techskills'])){foreach($result['techskills'] as $x){ echo "<p1 class=shitbut>$x</p1>";}}else{
  echo "<br><br>Data not updated";}?>
          </div>
        </div></div>
      <hr>
      
      <h1 style="color: azure; text-align:center;font-size: 30px">Non Technical Skills</h1>
      <div id="update" style="height: 285.2; width: 800px;border: 2px solid white;background-color: wheat; border-radius: 20px; margin: 20px auto 10px;">
        <div id=dem1>
          <div class=tech>
            <?php if(isset($result['ntechskills'])){foreach($result['ntechskills'] as $x){ echo "<p1 class=shitbut>$x</p1>";}}else{
  echo "<br><br>Data not updated";}?>
          </div>
        </div></div>
      <hr>
      
      <h1 style="color: azure; text-align:center;font-size: 30px">PROJECTS</h1><div style="margin:auto;width:fit-content;">
<?php 
if(isset($result['projects'])){
  foreach($result['projects'] as $x){ 
    //print_r($x);
    echo "<div class=tile><img class=tile-picture src=/demo/images/git.jpg>";
    echo "<div class=project-title>".$x['title']."</div>";
    echo "<div class=details>".$x['description']."<br><br>Tech-Stack: ".$x['tech-stack']."<br><br><a href='".$x['link']."' style=text-decoration: none; cursor: pointer><i class='fas fa-external-link-alt'></i>View Project</a></div></div>";
  }}else{
    echo "Data not updated";
  }
?></div>



<hr>

<h1 style="color: azure; text-align:center;font-size: 30px">INTERNSHIPS</h1><div style="margin:auto;width:fit-content;">
<?php 
if(isset($result['internships'])){
  foreach($result['internships'] as $x){ 
    echo "<div class=tile><img class=tile-picture src=/demo/images/code.png>";
    echo "<div class=details><br>Position: ".$x['position']."<br/>Company: ".$x['company']."<br/>Duration: ".$x['duration']." Month(s)<br><br><a href='".$x['link']."' style=text-decoration: none; cursor: pointer><i class='fas fa-external-link-alt'></i>View Certificate</a></div></div>";
  }}else{
    echo "Data not updated.";
  }
?></div>
<hr><h1 style="color: azure; text-align:center;font-size: 30px">COURSES DONE</h1><div style="margin:auto;width:fit-content;">
<?php 
if(isset($result['courses'])){
  foreach($result['courses'] as $x){ 
    echo "<div class=tile><img class=tile-picture src=/demo/images/course.jpg>";
    echo "<div class=details><br>Title: ".$x['title']."<br>Domain: ".$x['domain']."<br>Duration: ".$x['duration']." Hours(s)<br>Platform: ".$x['platform']."<br><br><a href='".$x['link']."' style=text-decoration: none; cursor: pointer><i class='fas fa-external-link-alt'></i>View Certificate</a></div></div>";
  }}else{
    echo "Data not updated.";
  }
?></div>
<hr><h1 style="color: azure; text-align:center;font-size: 30px">ACHIEVEMENTS</h1><div style="margin:auto;width:fit-content;">
<?php 
if(isset($result['achievements'])){
  foreach($result['achievements'] as $x){ 
    //print_r($x);
    echo "<div class=tile><img class=tile-picture src=/demo/images/ach.png>";
    echo "<div class=details><br>Title: ".$x['title']."<br>Domain: ".$x['domain']."<br>Year: ".$x['year']."<br><br><a href='".$x['link']."' style=text-decoration: none; cursor: pointer><i class='fas fa-external-link-alt'></i>View Achievement</a></div></div>";
  }}else{
    echo "Data not updated.";
  }
?></div>
<hr><h1 style="color: azure; text-align:center;font-size: 30px">PUBLICATIONS</h1><div style="margin:auto;width:fit-content;">
<?php
if(isset($result['publications'])){
  foreach($result['publications'] as $x){ 
    //print_r($x);
    echo "<div class=tile><img class=tile-picture src=/demo/images/course.jpg>";
    echo "<div class=details><br>Title: ".$x['title']."<br>Domain: ".$x['domain']."<br>Year: ".$x['year']."<br><br>Description: ".$x['description']."<br><br><a href='".$x['link']."' style=text-decoration: none; cursor: pointer><i class='fas fa-external-link-alt'></i>View Publication</a></div></div>";
}}
else{
  echo "Data not updated.";
}
?></div>
<hr><h1 style="color: azure; text-align:center;font-size: 30px">PARTICIPATION</h1><div style="margin:auto;width:fit-content;">
<?php 
if(isset($result['participation'])){
  foreach($result['participation'] as $x){ 
    //print_r($x);
    echo "<div class=tile><img class=tile-picture src=/demo/images/part.png>";
    echo "<div class=details><br>Title: ".$x['title']."<br>Domain: ".$x['domain']."<br><br><a href='".$x['link']."'style=text-decoration: none; cursor: pointer><i class='fas fa-external-link-alt'></i>View Certificate</a></div></div>";
  }}else{
    echo "Data not updated.";
  }
?></div>
<script>

function noti() {
  var x = document.getElementById("noti");
  var y = document.getElementById("not");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.backgroundColor = "DarkTurquoise";

  } else {
    x.style.display = "none";
    y.style.backgroundColor = "blueviolet";

  }
}
</script>
    </body>
  </html>
</html>
