<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
echo $error;}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection =mysqli_connect('localhost','root','','users');
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
//$db = mysql_select_db("company", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = ("select * from users where password='$password' AND username='$username'");
//$result =mysqli_query($connection,$query);
$result=$connection->query($query);
//$rows = mysqli_num_rows($result);
if ($result->num_rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: home.html"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
$_SESSION['ERRMSG_ARR'] = $error;
				session_write_close();
				header("location: firstpg.php");
				exit();
}
//mysql_close($connection); // Closing Connection
}
}
?>