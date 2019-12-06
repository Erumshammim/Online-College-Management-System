<?php
include('session.php'); 
if(!isset($_SESSION['login_user']))
{ 
  header("location: loginIndex.php");  // Redirecting To login page 
}
?>
   

<!DOCTYPE html>
<html lang="en">
<head>
   <title>The Evolutionary College</title>
        <link rel="stylesheet" href="css/instructor.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css">
body 
            {overflow:hidden;}
</style>
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
   
<section style="background-image:url(images/professor.jpg) ; 
   /* height: 100%;*/
    background-position: center;
    background-repeat: no-repeat;
    background-size: 1710px;
  width : 1710px;
  height:670px;
border: 2px solid;
                ">
<centre>
    <h1 style="text-align:center;
    font-family: sans-serif;
    font-size: 70px;
    font-weight: bolder;
    color:black;">HEAD OF DEPARTMENTS</h1>
   <div class="container">
   <table>
       <tr>
           <th>Department ID</th>
           <th>First Name</th>
           <th>Last Name</th>
           <th>Rank</th>
           <th>Type</th>
       </tr><br>
   
      <?php  $connection=mysqli_connect("localhost","root","");
       $db=mysqli_select_db($connection,'college');
   
       $query="SELECT * FROM instructor";
        $query_run=mysqli_query($connection,$query);
       while($row=mysqli_fetch_array($query_run))
        { 
       ?>
     
          <tr>
              <td><?php echo $row['deptId']; ?></td>
              <td><?php echo $row['firstName']; ?></td>
              <td><?php echo $row['lastName']; ?></td>
              <td><?php echo $row['rank']; ?></td>
              <td><?php echo $row['type']; ?></td>
          </tr>
          
       <?php }?>
    
   </table> 
     
   </div>
    
</centre>
    </section>
</body>    
</html>