<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);

?>
<?php
			if( isset($_SESSION['ERRMSG_ARR'])) {
			echo "<script type='text/javascript'>alert('Username or Password is invaid');</script>";
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
<html>
	<head>
	    <link rel="shortcut icon" href="icon.png">
		<title> Signup or Login </title>
		<style>
	body{
		height:100%;
		width:100%;
		background-image:url("foodbg3.jpg");
		 background-size: 100% 100%;

		
		

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
	p{
	position:fixed;
    top:15px;
	right:20px;
	font-size:15px;

	font-family:"Georgia";
	}
	.button{
	background-color:black;
	color:white;
	border:none;
	font-size:25px;
	font-family:Georgia;
	padding: 10px 20px;
	border-radius:12px;
	height:100px;
	width:400px;
	
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
	.b{
	position: absolute;
	top: 200px;
	left: 500px;
	
	}
	.icon{
	position: fixed;
	left:220px;
	top:20px;
	}
		.uname{
	background-color:black;
	position:fixed;
	<!---left:450px;
	top:200px;--->
	height:70px;
	width:350px;
	<!---padding: 5px;-->
	border-radius:10px;
	color:white;
	font-size:30px;
	}
	.pwd{
	background-color:black;
	position:fixed;
	<!---left:450px;
	top:350px;--->
	height:70px;
	width:350px;
	padding: 5px;
	border-radius:10px;
	color:white;
	font-size:30px;
	}
		.sub{
	background-color:black;
	position:fixed;
	left:650px;
	top:450px;
	height:50px;
	width:200px;
	padding: 5px;
	border-radius:10px;
	color:white;
	font-size:25px;
	}
	.login{
	position: fixed;
	top:100px;
	left: 500px;
	height:300px;
	width:300px;
	background-image:url("loginbg.jpg");
	padding: 100px;
	 border: 5px solid black;
	 border-radius: 15px;
	 font-size:25px;
	}
    .log{
	position : fixed;
	top:30px;
	left:600px;
	font-size:25px;
	}
	.button{
	background-color:black;
	color:white;
	border:none;
	font-size:15px;
	height: 30px;
	width: 100px;
	padding: 5px;
	}
	.button:hover{
		box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    }
	.text{
position: fixed;
top:200px;
left:100px;
font-size:70px;
color:green;
}
	</style>
	</head>
	<body  >

	<!---<div class = "login">
	<form action = "login2.php" method="post">
	  Username:  <input type="text" name="username" id="username" required> <br><br><br> 
		
	Password:  <input type="password" name="password" id="password" required>           
         
	<input class="sub" type="submit" name="submit" value = "Log in" id="submit">   	
	</form>
	</div>--->
	<!--
	<p class="b"> <a  href="signup.html"><button class="button">Sign Up</button> </a>     <br><br><br><br><br><br>
	<a href="login.php"><button class="button">Login</button> </a> </p>-->
	<div class="heading">
	<h1 style="color:white; font-family:Cambria">
	Food Factory 
	</h1>
	<img src="icon.png" class="icon" width=50 height=50>
	<form class ="log" action = "login2.php" method="post">
 <input type="text" name="username" id="username" placeholder="Enter Username" required>  
 <input type="password" name="password" id="password"  placeholder="Enter Password" required>           
         
	&nbsp <input class = "button" type="submit" name="submit" value = "Log in" id="submit">   	
	&nbsp &nbsp &nbsp &nbsp <a class="button" href="signup.php">  Create an account! </a>
	</form>
	
	<!--<pre>                              <img src="icon.png" width=50 height=50>  </pre> -->

</div>
<p class="text" align="center">
You Click it We make it.
</p>
 <script language="JavaScript" type="text/javascript">
    window.history.forward();              
 </script>
</body>
</html>
