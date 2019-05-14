<?php
  session_start();
  //connection to database named unilouisiana
  $db = mysqli_connect("localhost", "root", "", "unilouisiana");

  if (isset($_POST['reg_user'])) { //registration on index.php
    $userName = mysqli_real_escape_string($db, $_POST['username']);
    $_SESSION['username'] = $userName; //to display on home.php upon first registration
    $password = mysqli_real_escape_string($db, $_POST['password_1']);
    $password2 = mysqli_real_escape_string($db, $_POST['password_2']);
    $eMail = mysqli_real_escape_string($db, $_POST['email']);
    $firstName = mysqli_real_escape_string($db, $_POST['fname']);
    $lastName = mysqli_real_escape_string($db, $_POST['lname']);
    $major = $_POST['regMajor'];
    $_SESSION['regMajor'] = $major; //to display major upon first registration

    //Form validation
    if (empty($userName) || empty($password) || empty($password2) || empty($eMail) || empty($firstName) || empty($lastName)){
      echo "Please fill in every field.";
    }
    else{
      $sql = "INSERT INTO students(username, password, email, firstname, lastname, major) 
              VALUES('$userName', '$password', '$eMail', '$firstName', '$lastName', '$major')"; //feed into table
      mysqli_query($db, $sql);
      header("location: home.php");
    }
}

  if (isset($_POST['log_user'])){ //login on index.php
    $userName = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password_1']);

    if (empty($userName) || empty($password)){ //checking if fields are empty
      echo "Your username or password is incorrect.";
    }
    else{
      $sql = "SELECT * FROM students 
              WHERE username= '$userName' 
              AND password = '$password'"; //authenticate log-in
      $result = mysqli_query($db, $sql);

      $sql2 = "SELECT major FROM students
               WHERE username= '$userName'
               AND password = '$password'";
      $fetchMajor = $db->query($sql2); //gets and stores major
      $row = mysqli_fetch_row($fetchMajor);
      $major = $row[0];

      if (mysqli_num_rows($result) == 1){ //validated username and password
        $_SESSION['username'] = $userName;
        $_SESSION['regMajor'] = $major; //used for displaying major on home
        header('location: home.php'); //successfully log-in
      }
    }
  }

  if (isset($_POST['submitBtn'])){ //when the user submits course request on home.php
    $un = mysqli_real_escape_string($db, $_SESSION['username']);
    $desiredCourse = mysqli_real_escape_string($db, $_POST['desiredCourse']);
    $major = mysqli_real_escape_string($db, $_SESSION['regMajor']);
    //Validate that course selection matches
    $sql = "SELECT course 
            FROM courses 
            WHERE course='".$desiredCourse."'";
    $result = $db->query($sql);
    $sql2 = "SELECT username
             FROM enrollment
             WHERE username='".$un."'"; //Can enroll in a maximum of 5 courses
    $result2 = $db->query($sql2);

    if($result->num_rows > 0 && $result2->num_rows < 5){ //Valid course name & not enrolled already
      $sql = "INSERT INTO enrollment(username, course) VALUES('$un', '$desiredCourse')";
      mysqli_query($db, $sql);
      header("location: home.php"); //refresh page with updated schedules
    }else{ //Invalid course name
      echo "Error: Either your course name is invalid, your schedule is full, or you are already enrolled in the course.";
    }
  }

  if (isset($_POST['dropBtn'])){ //when the user drops course on home.php
    $dropCourse = mysqli_real_escape_string($db, $_POST['dropCourse']);
    $sql = "SELECT course /*Validating that course selection matches*/
            FROM courses 
            WHERE course='".$dropCourse."'";
    $result = $db->query($sql);
    
    if($result->num_rows > 0){ //Valid course name
      $sql = "DELETE FROM enrollment WHERE course='".$dropCourse."'";
      mysqli_query($db, $sql);
      header("location: home.php"); //refresh page with updated schedules
    }else{ //Invalid course name
      echo "Error: Either your course name is invalid or you are not enrolled.";
    }
  }
?>