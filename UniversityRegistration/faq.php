<?php include('myServer.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>UoL FAQ</title>
  <link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/kAox5FA.png"/>
<style type="text/css">
  * {
    box-sizing: border-box;
  }
  body, html{
    height: 100%;
    width: 100%;
    margin: 0px;
    font-family: Arial, Helvetica, sans-serif;
    color: black;
    font-size: 18px;
  }
  .header {
    height: 40%;
    background-image: url("http://www.lixcreative.com/wp-content/uploads/2016/09/Lion_sketch_header1984x765_NEW2016_lowres-5.jpg");
    background-position: absolute;
    background-size: 100% 100%;
    background-repeat: no-repeat;
    position: relative;
    text-shadow: -1px -1px 0 #000000,
    /*Outline*/   1px -1px 0 #000000,
                 -1px 1px 0 #000000,
                  1px 1px 0 #000000,  
                 -2px 0 0 #000000,
                  2px 0 0 #000000,
                  0 2px 0 #000000,
                  0 -2px 0 #000000;
  }
  .header-content {
    text-align: center;
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    color: white;
  }
  #lionLogo{
    float: right;
    height: 58%;
    width: 13%;
    right: 10%;
    top: 20%;
    position: absolute;
  }
  .topnav {
    background-color: black;
    width: 100%;
    overflow: auto;
  }
  .topnav a { /*styles links inside bar*/
    float: left; text-align: center;
    color: #f2f2f2; font-size: 18px;
    border: 5px solid black;
    padding: 14px 16px; width: 33.33%;
    text-decoration: none;
  }
  .topnav a:hover { /*when hovering over links*/
    background-color: #ddd;
    color: black;
  }
  .topnav a.active { /*whichever page you're on*/
    background-color: #BDA179;
    color: black;
  }
  .row:after{
    content: "";
    display: table;
    clear: both;
  }
  .generalBox{
    width: 50%; height: auto; left: 25%;
    border-radius: 5px; border: 5px solid black;
    font-size: 18px; font-family: verdana; text-align: center;
    background-color: #5F9EA0; margin: 5px;
  }
  .devBox {
    height: 60%; width: 50%;
    border-radius: 5px; border: 5px solid black;
    font-family: verdana; font-size: 18px; text-align: center;
    background-color: #5F9EA0;
  }
  .questions{
    margin: 10px;
  }
  .answers{
    border-radius: 5px; border: 1px solid black;
    padding: 5px 10px;
  }
  .column {
    width: 50%; 
    float: left;  
    padding: 10px;
  }
</style>
</head>

<body style="background-color: #BDA179;"> 
  
  <div class="header">
    <div>
      <h1 class="header-content" style="font-size: 48px;">UoL FAQ</h1>
      <img id="lionLogo" src="https://i.imgur.com/kAox5FA.png">
    </div>
  </div>

  <div class="topnav">
    <a href="majors.php">Browse Majors</a>
    <a href="index.php">Home</a>
    <a class="active" href="faq.php">FAQ</a>
  </div>

  <br><br>

<div class="row">
  <div class="generalBox" style="margin: 0 auto;">
    <h4>FAQ</h4>
    <p class="questions">What is this?</p>
      <p class="answers">A mock student enrollment website for the "University of Louisiana" (Go Lions!) where users can register, log-in to their account, browse available majors, and "enroll" that account in a selection of courses.</p><br>
    <p class="questions">Who made it?</p>
      <p class="answers">UoL's mark-up was done by a team of 2 students from Troy University: James Hanks and Forrest Bankston. You can find out about each of them below.</p><br>
    <p class="questions">What technologies were used?</p>
      <p class="answers">UoL's website was done using HTML/CSS, PHP, and SQL. The accounts and corresponding courses are stored in a local database using phpMyAdmin.</p><br>
  </div>
</div> <!-- end of row -->

<div class="row">
  <div class="column">
    <div class="devBox" style="float: right;">
      <h3 style="text-align: center;">James Hanks</h3>
      <p class="answers" style="margin: 10px">
        James Hanks is an incoming senior at Troy University with experience in Java, C++, HTML, CSS, JavaScript, PHP, SQL, and Python. 
        <p>
          <a href="https://jhanks5.github.io/home.html">Personal Website</a><br>
          <a href="https://www.docdroid.net/V87VskA/james-hanks-current-resume-19.docx">Resume</a><br>
          <a href="https://github.com/jhanks5">GitHub</a><br>
          <a href="https://www.linkedin.com/in/james-hanks-b98221169/">LinkedIn</a><br>
        </p>
      </p>
    </div>
  </div>

  <div class="column">
    <div class="devBox">
      <h3 style="text-align: center;">Forrest Bankston</h3>
      <p class="answers" style="margin: 10px">Forrest Bankston is a Computer Science student at Troy University, studying HTML, CSS, Java, JavaScript, PHP, and more.
      </p>
        <p>
          <a href="https://fbankston.github.io/">Personal Website</a><br>
          <a href="https://www.docdroid.net/mGxa2yg/james-f-bankston-resume-pdf.pdf">Resume</a><br>
          <a href="https://github.com/FBankston">GitHub</a><br>
          <a href="https://www.linkedin.com/in/forrest-bankston-2b9614180/">LinkedIn</a><br>
        </p>
     </div>
  </div> 
</div> <!-- end of row -->
</body>
</html>