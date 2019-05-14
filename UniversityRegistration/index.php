<?php include('myServer.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>UoL</title>
  <link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/SviPtsY.png"/>
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
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
  form, .content {
    width: 30%;
    margin: 0px auto;
    padding: 20px;
    border: 1px solid #B0C4DE;
    background: white; /* changed from white */
    border-radius: 10px 10px 10px 10px;
  }
  .input-group {
    margin: 10px 0px 10px 0px;
  }
  .input-group label {
    font-family: verdana;
    display: block;
    text-align: left;
    margin: 3px;
    color: black;
  }
  .input-group input {
    font-family: verdana;
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
  }
  .select-style {
    font-family: verdana; font-size: 16px;
    width: 93%; height: 30px;
    padding: 5px 10px;
    border-radius: 5px;
    border: 1px solid gray;
  }
  .btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
  }
  #registerBox{
    float: right;
    right: 13%;
    position: absolute;
  }
  #loginBox{
    float: left;
    left: 13%;
    position: absolute;
  }
  #space{
    width: 100%;
    height: 20%;
    position: absolute;
    bottom: -70%;
  }
</style>
</head>

<body style="background-color: #BDA179;"> 
  
<div class="header">
      <div>
       <h1 class="header-content" style="font-size: 48px;">University<br>of<br>Louisiana</h1>
       <img id="lionLogo" src="https://i.imgur.com/kAox5FA.png">
      </div>
</div>

<div class="topnav">
  <a href="majors.php">Browse Majors</a>
  <a class="active" href="index.php">Home</a>
  <a href="faq.php">FAQ</a>
</div>

<br><br><br><br>

<form id="registerBox" method="post" action="index.php">

    <div class="input-group">
      <label>UoL.edu Username</label>
      <input type="text" name="username">
    </div>

    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1">
    </div>
    
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>

    <div class="input-group">
      <label>Personal Email</label>
      <input type="email" name="email">
    </div>

    <div class="input-group">
      <label>First Name</label>
      <input type="text" name="fname">
    </div>
 
     <div class="input-group">
      <label>Last Name</label>
      <input type="text" name="lname">
    </div>

    <div class="input-group">
      <label>Desired Major</label>
      <div class="select-style"> <!-- encase select with div for class -->
        <select name="regMajor"> <!-- give select element a name for storing in PHP -->
          <option value="Business & Management">Business & Management</option>
          <option value="Computer Science">Computer Science</option>
          <option value="Criminal Justice">Criminal Justice</option>
          <option value="Education">Education</option>
          <option value="Nursing">Nursing</option>
          <option value="Political Science">Political Science</option>
        </select>
      </div>
    </div><br> 

    <div style="text-align:center;" class="input-group">
      <button type="submit" class="btn" name="reg_user">Join the Lions!</button>
    </div><br>
</form>

<form id="loginBox" method="post" action="index.php">
  <div class="input-group">
    <label>UoL.edu Username</label>
    <input type="text" name="username">
  </div>
  
  <div class="input-group">
    <label>Password</label>
    <input type="password" name="password_1">
  </div><br>
  
  <div style="text-align:center;" class="input-group">
    <button type="submit" class="btn" name="log_user">Sign In</button>
  </div><br>
</form>

<div id="space"></div>

</body>
</html>