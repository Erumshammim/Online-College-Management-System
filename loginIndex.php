<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user']))    
{
header("location: profile.php"); // Redirecting To Profile Page
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>The Evolutionary College</title>
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <inscript src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
    
<body>
 <div style="width=500px;height: 110px;float: right;margin-top: 40px; " >
  <!-----------menu-------------->
<section id="menu">

<nav class="navbar navbar-expand-lg navbar-light">
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ">
      <li class="nav-item active">
        <a class="nav-link" href="home.html">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.html">About Us</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="contact.html" >Contact Us</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="loginIndex.php" >Student LogIn</a>
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
     <!-----------LOG IN-------------->
    
<section>
  <div class="log_img">
           <br> <br><br>
    <div class="box1">
        <h1 style="text-align: center; font-size: 40px; font-family:arial; ">The Evolutionary College</h1><br>
        <h1 style="text-align: center; font-size: 25px;font-family:arial;">Student Login Form</h1>
      
        <form name="login" action="" method="post">
        <br><br>
            
        <div class="login">
          <input type="text" name="studentId" placeholder="StudentID" required=""> <br><br>
          <input type="password" name="password" placeholder="Password" required=""> <br><br>
          <button type="submit" name ="submit" value="Login" style="width:350px;height:40px;color:black;">Login</button>
        </div>
          
          <br>

            <span><?php echo $error; ?></span>
      </form>        
    </div>
  </div>
</section>    
</body>
</html>