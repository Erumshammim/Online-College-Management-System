<!DOCTYPE html>
<html lang="en">
<head>
   <title>The Evolutionary College</title>
        <link rel="stylesheet" href="css/subjects.css">
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
    
<section id="picture">
<centre>
    <h1 style="text-align:center;
    font-family: sans-serif;
    font-size: 70px;
    font-weight: bolder;
    color:black;">Subjects</h1><br><br><br>
    <div class="container">
    <?php
    $conn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($conn,'college');
    $query="SELECT * FROM subject";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    if($total!=0)
    {
        ?>
    <table>
    <tr>
        <th>SUBJECTID</th>
        <th>SUBJECT NAME</th>
        <th>DESCRIPTION</th>
        <th>TYPE</th>
        <th>TERM</th>
        </tr>
   <?php
        while($result=mysqli_fetch_assoc($data))
        {
            echo "<tr>
        <td>".$result['subjectId']."</td>
        <td>".$result['subjectName']."</td>
        <td>".$result['description']."</td>
        <td>".$result['type']."</td>
        <td>".$result['term']."</td>
        </tr>";
        }
    }
    else
    {
        echo "No record found";
    }
    ?>
         </table>
    </div>
    </centre>
    </section>
    </body>
</html>

    
    
    
    
    
    