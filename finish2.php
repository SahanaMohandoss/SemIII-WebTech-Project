
<html>
<head>
</head>
<body>
<?php
extract($_POST);

	$con=mysqli_connect('localhost','root','','users');

	
	$query = "INSERT INTO users VALUES('$Uname','$pass','$confpass','$Name','$email','$addr','$dob',$phno)";
	mysqli_query($con,$query);
	//echo "err:" . $con->error;
	//echo "err:" . $con->error;
	$err=$con->error;
	
	//echo($err);
	if ($err)
	{
		echo "<a href='signup.html'>Go Back </a>";
		echo $err;
		
	}
	else
	{
		echo "Registration Successfull ";
		echo "<a href='firstpg.html'>Login</a>";
		
	}
	
?>
</body>
</html>