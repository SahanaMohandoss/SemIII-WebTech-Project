<!doctype html>
<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	
?>
<html>

<head>
	<link rel="shortcut icon" href="icon.png">
	<title>
	
	Sign Up! </title>
<style>
	body{
	 background-color:  #bfbfbf;
	 repeat-x:no-repeat;
	 repeat-y:no-repeat;
	  
	}
	.heading{
	position:fixed;
	top:0;
	left:0;
	background-color:#336600;
	width:100%;
	height:75px;
	
	}
	h1{
	position:fixed;
	top:15;
	left:20px;
	
	}
	
	.Signup{
	background:black;
	color:white;
	width:100%;
	text-align:center;
	position:absolute;
	top:75px;
	left:0px;
	padding:15px;
	font-family:Georgia;
	font-size:20px;
	height: 30px
	}
	.Reg{
	 background-color:#ffffe6;
	color:black;
	text-align:center;
	font-weight:bold;
	border:solid 1px black;
	position:absolute;
	top:170px;
	left:100px;
	padding:15px;
	font-family:Georgia;
	font-size:20px;
	width:1200px;
	height: 500px
	}
	.button:hover{
		box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    }
	.button{
	background-color:black;
	color:white;
	font-weight:bold;
	border:none;
	font-size:22px;
	padding: 10px 20px;
	border-radius:12px;
	
	}

	</style>
</head>
<body>
<?php
			if( isset($_SESSION['ERRMSG'])) {
			echo '<script type="text/javascript">alert("'.$_SESSION['ERRMSG'].'");</script>';
			unset($_SESSION['ERRMSG']);
			}
		?>
<div class="Signup">
<b>SIGN UP NOW!</b>
</div>
<div class="Reg">
<form action="finish.php" method="post">
<br>
<br>
<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Full Name:&nbsp &nbsp <input type="Text" name = "Name" required > </input></label> <br> <br>
<label> Phone Number:&nbsp &nbsp &nbsp &nbsp <input type="Phone" name = "phno" required> </input></label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<label> Email ID:&nbsp&nbsp&nbsp <input type="email" name = "email" required > </input></label> &nbsp &nbsp &nbsp &nbsp
<label> Date of Birth:&nbsp&nbsp&nbsp <input type="Date" name = "dob" required> </input></label><br> <br>
<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Address:&nbsp&nbsp&nbsp <textarea name = "addr" required></textarea> </label> <br> <br>
<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Username:&nbsp&nbsp&nbsp <input type="text" name = "Uname" required > </input></label> <br> <br>
<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Password:&nbsp&nbsp&nbsp <input type="Password" name = "pass" required> </input></label> <br> <br>
<label> &nbsp &nbsp &nbsp &nbsp &nbsp  Confirm Password:&nbsp&nbsp&nbsp <input type="Password" name = "confpass" required> </input></label> <br> <br><br><br>
<label>  <input type="reset" name = "reset" class = "button" > </input></label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<label>  <input type="submit" name = "submit" value = "Sign Up!" class = "button" > </input></label> 
</form>
</div>
<div class="heading">
	<h1 style="color:white; font-family:Cambria">
	Food Factory
	</h1>
<pre>                                <img src="icon.png" width=50 height=50>      
</pre>
</div>
</body>
</html>
