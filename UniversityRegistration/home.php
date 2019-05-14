<?php include('myServer.php')?>
<!DOCTYPE html>
<html>
<head>
  <title>UoL FAQ</title>
  <link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/kAox5FA.png" />
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
    width: 90%; margin: 0px auto;
    padding: 20px; background: #5F9EA0;
    border: 2px solid black; border-radius: 10px 10px 10px 10px;
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
  .courseBox {
    height: auto; width: 50%;
    border-radius: 5px; border: 5px solid black;
    font-family: verdana; font-size: 18px; text-align: center;
  }
  .questions{
    margin: 10px;
  }
  .majorHeader{
    border-radius: 5px; border: 1px solid black;
    padding: 5px 10px;
    margin: 0 auto; width: 50%;
  }
  .column {
    width: 50%; 
    float: left;  
    padding: 10px;
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
  .logout a { /*styles logout button*/
    left: 25%;  width: auto; height: auto;
    text-align: center;
    background-color: #5F9EA0; color: black; font-size: 18px;
    border: 3px solid black;
    padding: 14px 16px;
    text-decoration: none;
  }
  .logout a:hover { /*when hovering over logout*/
    background-color: black;
    color: white;
  }
  .boxSubHeading {
    text-align: center; text-decoration: underline;
  }
  .center{
    text-align: center;
    margin: 0 auto;
  }
</style>
</head>

<body style="background-color: #BDA179;"> 
  
  <div class="header">
      <div>
       <h1 class="header-content" style="font-size: 48px;">Student Planning</h1>
       <img id="lionLogo" src="https://i.imgur.com/kAox5FA.png">
    </div>
  </div>

  <div class="topnav">
    <a href="majors.php">Browse Majors</a>
    <a class="active" href="index.php">Home</a>
    <a href="faq.php">FAQ</a>
  </div>

  <br>

<div style="text-align: center;">
  <h2>Welcome, <?php echo $_SESSION['username'] ?>.</h2>
  <h3>Enroll in the courses for your major below.</h3>
  <p class="majorHeader">You are a <strong><?php echo $_SESSION['regMajor'] ?></strong> major</p>
</div>

<div class="row">
  <div class="column">
    <div class="courseBox" style="float: right;">
      <h2 style="text-align: center;">Register</h2>
      <form method="post" action="home.php">
        <h3 class="boxSubHeading">Available Courses</h3>
        <table class="center">
          <tr>
            <td>
              <?php
                $db = mysqli_connect("localhost", "root", "", "unilouisiana");
                $un = mysqli_real_escape_string($db, $_SESSION['username']); 
                $major = mysqli_real_escape_string($db, $_SESSION['regMajor']); //used to find classes based on major

                $sql = "SELECT course FROM courses WHERE major='".$major."'";
                $result = $db->query($sql);

                if(!empty($result) && $result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["course"]."</td></tr><td></td>"; //display major courses
                  }
                }
              ?>
            <td>
          </tr>
        </table>
      </form>

      <p>
        <div class="input-group">
          <label style="text-align: center; margin: 0 auto;">Register for a Course</label>
           <form method="post" action="home.php">
              <input type="text" name="desiredCourse" placeholder="Enter course name...">
              <input type="submit" name="submitBtn" value="Register">
          </form>          
        </div>
      </p>
    </div>
  </div> 

  <div class="column">
    <div class="courseBox">
      <h2 style="text-align: center;">Your Courses</h2>
      <form method="post" action="home.php">
        <h3 class="boxSubHeading">Enrolled</h3>
        <table class="center">
          <tr>
            <td>
              <?php
                $db = mysqli_connect("localhost", "root", "", "unilouisiana");
                $un = mysqli_real_escape_string($db, $_SESSION['username']); 
                $major = mysqli_real_escape_string($db, $_SESSION['regMajor']);

                $sql = "SELECT course FROM enrollment WHERE username='".$un."'";
                $result = $db->query($sql);

                if(!empty($result) && $result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["course"]."</td></tr><td></td>";
                  }
                }
              ?>
            <td>
          </tr>
        </table>
      </form>

       <p>
        <div class="input-group">
          <label style="text-align: center; margin: 0 auto;">Drop a Course</label>
           <form method="post" action="home.php">
              <input type="text" name="dropCourse" placeholder="Enter course to drop...">
              <input type="submit" name="dropBtn" value="Drop">
          </form>          
        </div>
      </p>

    </div>
  </div>

</div>

<h3 class="logout" style="text-align: center;">
  <a href="logout.php" style="display:inline-block;">Log Out</a>
</h3>

</body>
</html>