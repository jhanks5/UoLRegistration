<?php include('myServer.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>UoL Majors</title>
  <link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/SviPtsY.png" />
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
  .column{ /*creates 3 equal column*/
    width: 33.33%;
    float: left;
    padding: 2px;
    text-align: center;
  }
  .column img {
    width: 100%;
    height: 300px; /*must match overlay*/
    border: 8px solid black;
  }
  .column h3 {
    font-size: 24px;
    text-decoration: underline;
    padding-bottom: 2px;
  }
  .container {
    position: relative;
  }
  .overlay {
    position: absolute;
    top: 0; bottom: 0; left: 0; right: 0;
    height: 300px; width: 100%;
    opacity: 0;
    transition: .5s ease;
    overflow: hidden;
    background:rgba(0,0,0,0.5);
  }
  .column:hover .overlay{ /*reveals overlay on hover*/
    opacity: 1;
  }
  .text {
    color: white; font-size: 18px; 
    text-align: center; position: relative;
    top: 50%; left: 50%;
    padding-right: 10px; padding-left: 10px;
    word-wrap: break-word; /*padding w/ this keeps text from clipping*/
    transform: translate(-50%, -50%); /*general*/
  }
</style>
</head>

<body style="background-color: #BDA179;">

  <div class="header">
      <div>
  	    <h1 class="header-content" style="font-size: 48px;">UoL Majors</h1>
        <img id="lionLogo" src="https://i.imgur.com/kAox5FA.png">
      </div>
  </div>

  <div class="topnav">
    <a class="active" href="majors.php">Browse Majors</a>
    <a href="index.php">Home</a>
    <a href="faq.php">FAQ</a>
  </div><br>

<div class="row"> <!-- 3 columns to a row -->
   <div class="column">
    <h3> Business & Management </h3>
    <div class="container">
      <img src="https://c1.sfdcstatic.com/content/dam/blogs/us/thumbnails/3-ways-sales-leaders-can-align-with-sales-strategy-to-grow-the-business/sales_alignment.png" alt="businessimg">
        <div class="overlay">
          <marquee behavior="scroll" direction="up" scrollamount="4" class="text">Chasing success? Have an entrepreneurial spirit? For those always looking to close the deal, majoring in Business is the choice for you!
          <br><br> Available Courses: <br>
              Business Administration <br>
              Introduction to Economics <br>
              Marketing <br>
              Accounting <br>
              Business Law <br>
          </marquee>
        </div>
      </div>
  </div>

  <div class="column">
    <h3> Computer Science </h3>
      <div class="container">
        <img src="https://cdn0.tnwcdn.com/wp-content/blogs.dir/1/files/2017/09/bUcvrRc-1-796x398.jpg" alt="comp sci">
          <div class="overlay">
            <marquee behavior="scroll" direction="up" scrollamount="4" class="text">Looking to be an asset to the future of tech? UoL's Computer Science program can set you up for success! We offer classes on programming, hardware, networking, database management and much more!
              <br><br> Available Courses: <br>
              Computer Science 1 <br>
              Computer Science 2 <br>
              Object-Oriented Programming <br>
              Networking 1 <br>
              Web-Based Software Development <br>
            </marquee>
          </div>
      </div> <!-- end of container -->
  </div>

  <div class="column">
    <h3> Criminal Justice </h3>
    <div class="container">
      <img src="https://pi.tedcdn.com/r/talkstar-photos.s3.amazonaws.com/uploads/603d92ce-f222-41bf-ba2e-6a5c37175ba4/criminal_justice_reform_1200x627.jpg?quality=89&w=1200" alt="crimjustice">
        <div class="overlay">
          <marquee behavior="scroll" direction="up" scrollamount="4" class="text">Interested in helping to create and enforce a safer society? To protect and serve? The UoL Criminal Justice program has everything you need to start making the right calls.
             <br><br> Available Courses: <br>
              Introduction to Legal Studies <br>
              Crime and Forensics <br>
              Sociology of Law <br>
              Juvenile Justice <br>
              Domestic Violence <br>
          </marquee>
        </div>
    </div>
  </div>  
</div>

<div class="row">
  <div class="column">
    <h3> Education </h3>
    <div class="container">
      <img src="https://www.techunido.com/wp-content/uploads/2018/06/Education-2.jpg" alt="education">
        <div class="overlay">
            <marquee behavior="scroll" direction="up" scrollamount="4" class="text">Wanting to help usher in a brighter generation? Look no further! At UoL, you will learn from the best!
               <br><br> Available Courses: <br>
                Education Administration <br>
                Early Childhood Education <br>
                Secondary Education <br>
                Psychology <br>
                General Studies <br>
            </marquee>
        </div>
    </div>
  </div>

  <div class="column"> <!-- biology -->
    <h3> Nursing </h3>
    <div class="container">
    <img src="https://policecheckexpress.com.au/wp-content/uploads/2017/10/Nursing-job-Australia.png" alt="nursing">
        <div class="overlay">
          <marquee behavior="scroll" direction="up" scrollamount="4" class="text">Is caring for others your cup of tea? Is the health of the people your passion? UoL has the rigorous curriculum necessary to give any budding nurse their best start!
             <br><br> Available Courses: <br>
              Human Anatomy and Physiology <br>
              Nutrition <br>
              Health Assessment <br>
              Sociology of Health & Medicine <br>
              Principles of Biology <br>
          </marquee>
        </div>
    </div>
  </div>

  <div class="column"> <!-- poly sci -->
    <h3> Political Science </h3>
    <div class="container">
    <img src="https://www.linkedin.com/media-proxy/ext?w=1200&h=675&hash=Z%2ByVzF4ZDNYVl6RkBOJt6z5WiQM%3D&ora=1%2CaFBCTXdkRmpGL2lvQUFBPQ%2CxAVta5g-0R6plxVUzgUv5K_PrkC9q0RIUJDPBy-nWCWs-9efZnTpf8bdZLSiolgWfSwHmQw3f-evQzDkFo69LcLmY4Yx3A" alt="polysci">
        <div class="overlay">
          <marquee behavior="scroll" direction="up" scrollamount="4" class="text">Fascinated by the political machinations of the elite? Looking to spend taxpayer money? Political Science is perfect for you!
           <br><br> Available Courses: <br>
              Political Theory <br>
              World Politics <br>
              Public Administration <br>
              American Government <br>
              International Relations <br>
          </marquee>
        </div>
    </div>
  </div>
</div>
<br><br><br>

</body>
</html>