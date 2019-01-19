<?php 
$mysqli = new mysqli("localhost", "root" , "" , "rplp");
session_start();

$user_check=$_SESSION['username']; 
$ses_sql=mysqli_query($conn, "SELECT username, email, FROM login WHERE username='$user_check' " ) or die($mysql_error(($ses_sql));
$row = mysqli_fetch_array($ses_sql); 
$loggedin_session=$row['username']; 
$loggedin_id=$row['id'];
if(!isset($loggedin_session) ||  $loggedin_session == NULL) { echo "GO BACK!";  

} 

?>