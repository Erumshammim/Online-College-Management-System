<?php
session_start(); // Starting Session 
$error = '';     // Variable To Store Error Message 
if (isset($_POST['submit']))
{ 
  if (empty($_POST['studentId']) || empty($_POST['password'])) { 
    $error = "StudentID or Password is invalid"; 
 }
  else
  { 
    // Define $studentId and $password 
    $studentId = $_POST['studentId']; 
    $password = $_POST['password']; 
    // mysqli_connect() function opens a new connection to the MySQL server. 

      $conn = mysqli_connect("localhost","root","","college"); //
    // SQL query to fetch information of registerd users and finds user match. 
    $query = "SELECT studentId, password from Student where studentId=? AND password=? LIMIT 1"; 
    // To protect MySQL injection for Security purpose 
    $stmt = $conn->prepare($query); 
    $stmt->bind_param("ss", $studentId, $password); 
    $stmt->execute(); 
    $stmt->bind_result($studentId, $password); 
    $stmt->store_result(); 
    if($stmt->fetch())                                  //fetching the contents of the row 
    { 
      $_SESSION['login_user'] = $studentId;             // Initializing Session //studentId will store in login_user
    header("location: profile.php");                      // Redirecting To Profile Page 
  } 
  mysqli_close($conn);                                  // Closing Connection 
}
}
?>