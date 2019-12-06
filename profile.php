<?php
include('session.php'); 
if(!isset($_SESSION['login_user']))
{ 
  header("location: loginIndex.php");  // Redirecting To login page 
}
?>
<!--We check, did ‘login user’ session exist or not? If ‘login user’ did not exist then that means, a user did not login we redirect the user to the login page which is loginIndex.php.
We use <?php echo $login_session; ?> to display username in a profile page.
If a user clicks the logout link then they will redirect to the logout page.-->

<!DOCTYPE html>
<html>
<head>
 <title>The Evolutionary College</title>
 <link href="css/profile.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!--
    <style type="text/css">
body 
            {overflow:hidden;}
</style>
-->
</head>
<body>
    <div style="width=500px;height: 110px;float: right;margin-top: 40px;">
  <!-----------menu-------------->
<section id="menu">

<nav class="navbar navbar-expand-lg navbar-light">
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.html">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html" >Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="loginIndex.php">Student Profile</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>      
</section>    
 </div>
  <div style="width:500px;height:150px">
  <div style="width:100px;height:150px;float: left"> <img src="images/logo.png" width="150px" height="150px"></div>
   <div id="heading"style="width:400px;height:100px;float: right"><h2>The<br>Evolutionary College</h2></div>
</div> 
   
    
 <div id="profile" style="background-size: 1710px;
  width: 1710px;
  height: 200px;
  border: 2px solid;">
 <h3 style=margin-top:60px;>Welcome To Student Portal</h3><br>
     <h3>Student Id: <?php echo $login_session; ?></h3>
      </div>

     <!-----------submenu-------------->
<section id="submenu">
   <nav class="navbar navbar-expand-lg navbar-light">
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ">
      <li class="nav-item active">
          <div class="image" style="width:400px;height:350px;  ">  
             <a  href="attendance.php" target="_blank"><img style="width:390px;height:340px;" src="images/attendence.png"></a></div>
        <a class="link" style="margin-left: 40px;
    margin-right: 250px;" href="attendance.php" target="_blank">Attendance </a>
      </li>
      <li class="nav-item">
          <div class="image" style="width:400px;height:350px;">
              <a  href="marks.php" target="_blank"><img style="width:390px;height:340px;" src="images/a+.jpg"></a></div>
<!--                 <a class="image" href="marks.php"><img src="images/a+.jpg"></a><br>-->
        <a class="link" style="margin-left: 40px;
    margin-right: 250px;" href="marks.php" target="_blank">Marks</a>
      </li>
     
      <li class="nav-item">
          <div class="image" style="width:400px;height:350px; ">
              <a  href="subjects.php" target="_blank"><img style="width:390px;height:340px;" src="images/subjects.jpg"></a></div>
<!--                  <a class="image" href="subjects.php"><img src="images/subjects.jpg"></a><br>-->
        <a class="link" style="margin-left: 40px;
    margin-right: 250px;" href="subjects.php" target="_blank">Subjects</a>
      </li>
         </ul>
  </div>
</nav>  
    </section>
    
    
  <section id="submenu">
   <nav class="navbar navbar-expand-lg navbar-light">
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ">      
        <li class="nav-item">
          <div class="img" style="width:400px;height:350px; 
    ">
              <a  href="instructor.php" target="_blank"><img style="width:390px;height:340px;" src="images/professor.jpg"></a></div>
                 
        <a class="link" style="margin-left: 40px;
    margin-right: 250px;" href="instructor.php"target="_blank" >Instructors</a>
      </li>
        

        <li class="nav-item">
          <div class="img" style="width:400px;height:350px; ">
              <a  href="dept.php" target="_blank"><img style="width:390px;height:340px;" src="images/department.jpg"></a></div>
                  
        <a class="link" style="margin-left: 40px;
    margin-right: 250px;" href="dept.php"target="_blank" >Departments</a>
      </li>
  </ul>
  </div>
</nav>  
    </section> 

</body>
</html>