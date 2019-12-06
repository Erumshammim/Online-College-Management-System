<?php
// mysqli_connect() function opens a new connection to the MySQL server. 
$conn = mysqli_connect("localhost", "root", "", "college"); 
session_start();                       // Starting Session 
$user_check = $_SESSION['login_user']; // Storing Session 
$query = "SELECT studentId from Student where studentId = '$user_check'";  // SQL Query To Fetch Complete  
$ses_sql = mysqli_query($conn, $query);  //Information Of User
$row = mysqli_fetch_assoc($ses_sql); 
$login_session = $row['studentId'];
?>