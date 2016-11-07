<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<html>
<head>
<title> Food Factory </title>
		<style>
	.bg{
		height:100%;
		width:100%;
		left:0px;
		background-image:url("board.jpeg");
		//-webkit-filter: blur(2px);
		//-moz-filter: blur(2px);
		//-o-filter: blur(2px);
		//-ms-filter: blur(2px);
		//filter: blur(2px);
		//z-index:1;

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
	left:450px;
	top:200px;
	height:70px;
	width:350px;
	padding: 20px;
	border-radius:10px;
	color:white;
	font-size:30px;
	}
	.pwd{
	background-color:black;
	position:fixed;
	left:450px;
	top:350px;
	height:70px;
	width:350px;
	padding: 20px;
	border-radius:10px;
	color:white;
	font-size:30px;
	}
		.sub{
	background-color:black;
	position:fixed;
	left:540px;
	top:500px;
	height:70px;
	width:200px;
	padding: 20px;
	font-weight:bold;
	border-radius:10px;
	color:white;
	font-size:25px;
	}
	.login{
	position: fixed;
	background-color:white;
	padding: 30px;
	}

	</style>
</head>
<body>
 <?php
			if( isset($_SESSION['ERRMSG_ARR'])) {
			echo "<script type='text/javascript'>alert('Username or Password is invaid');</script>";
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
<div class="bg"> </div>
<div class ="login">
<form action = "login2.php" method="post">
<div class="uname">  Username:  <input type="text" name="username" id="username" required>  
		</div>
<div class="pwd">      Password:  <input type="password" name="password" id="password" required>           
          </div>
		  <input class="sub" type="submit" name="submit" value = "Log in" id="submit">           
 <span><?php echo $error; ?></span>
</form>
<div>

<div class="heading">
	<h1 style="color:white; font-family:Cambria">
	Food Factory 
	</h1>
	<img src="icon.png" class="icon" width=50 height=50>
	
	<!--<pre>                              <img src="icon.png" width=50 height=50>  </pre> -->

</div>

</body>
</html>
