<?php
session_start();?>
<html>
<head>
<style>
.bg{
		height:100%;
		width:100%;
		background-image:url("board.jpeg");
		/*-webkit-filter: blur(2px);
		-moz-filter: blur(2px);
		-o-filter: blur(2px);
		-ms-filter: blur(2px);
		filter: blur(2px);
		z-index:1; */
		
		

	}
	.heading{
	position:fixed;
	top:0;
	left:0;
	background-color:#336600;
	width:1500px;
	height:75px;
	
	}
	h1{
	position:fixed;
	top:15;
	left:20px;
	
	}
		.button{
	background-color:black;
	position:absolute;
	color:white;
	border:none;
	font-size:25px;
	font-family:Georgia;
	padding: 10px 20px;
	border-radius:12px;
	font-size:30px;
	height:100px;
	width:400px;
	top:400px;
	left:500px;
		}
		
	.button:hover{
		box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    }
	.mark{
	position:relative;
	top:100px;
	}
	.link{
	position:relative;
	top:100px;
	padding-left:40px;
	}
	
	.icon{
	position: fixed;
	left:220px;
	top:20px;
	}
	.message{
		background-color:black;
		position:fixed;
	left:450px;
	top:250px;
	height:40px;
	width:300px;
	border-radius:10px;
	color:white;
		font-size:20px;
	/*	color:white;
		position: fixed;
		top: 300px;
		left:500px;*/
	}
</style>
</head>
<body>
<?php

extract($_POST);
	$err=0;
	$con=mysqli_connect('localhost','root','','users');
    if($pass!=$confpass)
			$err="Password and Confirm Password do not match";
	if(!$err){
	$query = "INSERT INTO users VALUES('$Uname','$pass','$confpass','$Name','$email','$addr','$dob',$phno)";
	mysqli_query($con,$query);
	$err=$con->error;
	if(mysqli_errno($con)==1062)
		($err ="Username already exists");}
	/*if(mysql_errno()==1062)
		die($err ="Username already exists");
	//echo "err:" . $con->error;
	//echo "err:" . $con->error;
	else 
		die($err=$con->error);

	}*/
	//echo($err);
	/*if ($err)
	{   echo "<div class='message'>Error!-";
		echo $err;
		echo "</div>";
		echo "<a href='signup.html' class='button'><b>Go Back </b> and fix error</a>";

	}
	else
	{
		echo "<div class='message'><b>Registration Successful! </b> </div>";
		echo "<a href='javascript:history.go(-1)' class='button'>Login</a>";
		
	}*/
	if ($err) {
// Initializing Session
$_SESSION['ERRMSG'] = $err;

echo $_SESSION['ERRMSG'];
session_write_close();
header("location: signup.php"); // Redirecting To Other Page
} else {
				header("location: firstpg.php");
				exit();
}
	
?>
<div class="bg">  </div> 

	<div class="heading">
	<h1 style="color:white; font-family:Cambria">
	Food Factory 
	</h1>
	<img src="icon.png" class="icon" width=50 height=50>
	
	<!--<pre>                              <img src="icon.png" width=50 height=50>  </pre> -->

</div>
</body>
</html>