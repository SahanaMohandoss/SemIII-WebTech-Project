<!DOCTYPE html>
<html>
<head>
	<title>Masala Darbar: Eat without defeat!</title>
	<link rel="icon" href="icon.png">
	<style>
	body{
		background-image:url('Great-Food.jpg');
		 background-repeat: repeat-y;
	}	
	
	
	
	
	.abc{
		background-color:black;
		letter-spacing: 30px;
		position:relative;
		font-family:cursive;
		font-size:30px;
		text-align:center;
		color:white;
		padding: 5px;
		margin: 0px;
	}
	
	td{
		padding: 10px;
		border-bottom: 1px solid #ddd;
		text-align: center;
		color:black;
	}
	
	th{
		background-color:orange;
		text-shadow: 2px 2px #808080;
		letter-spacing: 5px;
		color:black;
	}
	
	table{ 
		 border-radius: 5px;
		 margin: auto;
		 text-align:center;
	}
	.button{
	background-color:black;
	color:white;
	border:none;
	padding: 10px 20px;
	border-radius:12px;
	
	}
	
	button:hover{
		box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    }
	.heading{
	position:fixed;
	top:0;
	left:0;
	background-color:orange;
	width:1500px;
	height:75px;
	}
	
	.h1{
		 
		 display:inline;
		 background-color:black;
	}
	
	.Menu{
	border: none ;
	background-color:lightyellow;
	position:relative;
	left:370px;
	top:70px;
	width:600px;
	padding:0px;
	margin:0px
		}
		
	p{
		 
	width:1500px;
	height:75px;
	text-align:left;
	
	}
	
	.pou{
		text-align:center;
		}
	
	
	</style>	
</head>
<body>
	<div class="Menu">
		<div class="abc"><b>MENU</b></div>
	<form action="IndianBill.php" method="post">
	<table width = 500 px>
	<tr><th>Tandoor</th></tr>
	  <tr><td><input type="checkbox" name="Indian[]" value="TandoorTM"></td><td>Tandoori Murgh</td><td>201</td></tr> <br>
	  <tr><td><input type="checkbox" name="Indian[]" value="TandoorMT"></td><td>Murgh Tikka</td><td>220</td></tr> <br>
	  <tr><td><input type="checkbox" name="Indian[]" value="TandoorTS"></td><td>Tandoori Sabzi</td><td>220</td></tr> <br>
	  <tr><td><input type="checkbox" name="Indian[]" value="TandoorRK"></td><td>Reshmi Kabab</td><td>200</td></tr> <br>
	  <tr><td><input type="checkbox" name="Indian[]" value="TandoorMSK"></td><td>Murgh Seekh Kabab</td><td>220</td></tr> <br>
	  <tr><td><input type="checkbox" name="Indian[]" value="TandoorTJ"></td><td>Tandoori Jhinga</td><td>700</td></tr> <br>
	  <tr><td><input type="checkbox" name="Indian[]" value="TandoorMaT"></td><td>Machli Tikka</td><td>315</td></tr> <br>
	  <tr><td><input type="checkbox" name="Indian[]" value="TandoorMH"></td><td>Murgh Hariyali</td><td>350</td></tr> <br>
	  <tr><td><input type="checkbox" name="Indian[]" value="TandoorPT"></td><td>Paneer Tikka</td><td>201</td></tr> <br>
	  <tr><td><input type="checkbox" name="Indian[]" value="TandoorSK"></td><td>Seekh Kabab</td><td>140</td></tr> <br>
	 </table>
	 <table width = 500 px >
	  <tr><th>Rice</th></tr>
	  <tr><td><input type="checkbox" name="Indian[]" value="RiceBC"></td><td>Basmati Chawal </td><td>201</td></tr> <br>
	  <tr><td><input type="checkbox" name="Indian[]" value="RiceJC"></td><td>Jeera Chawal </td><td>220</td></tr> <br>
	  <tr><td><input type="checkbox" name="Indian[]" value="RiceNC"></td><td>Nimbu Chawal</td><td>220</td></tr> <br>
	  <tr><td><input type="checkbox" name="Indian[]" value="RiceMP"></td><td>Matar Palau</td><td>100</td></tr> <br>
	  <tr><td><input type="checkbox" name="Indian[]" value="RiceSB"></td><td>Sabzi Biryani</td><td>120</td></tr> <br>
	  <tr><td><input type="checkbox" name="Indian[]" value="RiceMB"></td><td>Murgh Biryani </td><td>270</td></tr> <br>
	  <tr><td><input type="checkbox" name="Indian[]" value="RiceJB"></td><td>Jhinga Biryani</td><td>315</td></tr> <br>
	  <tr><td><input type="checkbox" name="Indian[]" value="RiceGB"></td><td>Gosht Biryani</td><td>350</td></tr> <br>
	  </table>
	  	 <table width = 500 px>
	  <tr><th>Breads</th></tr>
	  <tr><td><input type="checkbox" name="Indian[]" value="BreadN"></td><td>Naan </td><td>201</td></tr> <br>
	  <tr><td><input type="checkbox" name="Indian[]" value="BeadLN"></td><td>Lassan Naan </td><td>220</td></tr> <br>
	  <tr><td><input type="checkbox" name="Indian[]" value="BreadPN"></td><td>Peshawari Naan</td><td>220</td></tr> <br>
	  <tr><td><input type="checkbox" name="Indian[]" value="BreadPK"></td><td>Paneer Kulcha </td><td>100</td></tr> <br>
	  <tr><td><input type="checkbox" name="Indian[]" value="BreadP"></td><td>Paratha</td><td>120</td></tr> <br>
	  <tr><td><input type="checkbox" name="Indian[]" value="BreadAP"></td><td>Alu Paratha </td><td>700</td></tr> <br>
	  <tr><td><input type="checkbox" name="Indian[]" value="BreadTR"></td><td>Tandoori Roti</td><td>315</td></tr> <br>
	  <tr><td><input type="checkbox" name="Indian[]" value="BreadLP"></td><td>Lachha Paratha</td><td>350</td></tr> <br>
	  <tr><td><input type="checkbox" name="Indian[]" value="BreadP"></td><td>Puri</td><td>201</td></tr> <br>
	  </table>
	  <br><br><br><br>
	  <div class="pou"><input id="sub" type="submit" value="Done"><br><br></div>
	</form>
	
	</div>
	
	<div class="heading">
		<h1 style="color:white; font-family:Cambria;" >
		  Masala Darbar <img src="ind.jpg" width=50 height=50>

	</h1>
	</div>
		<script>
	//document.querySelector("#form1").onSubmit=check();
	document.getElementById("sub").addEventListener("click", check,false);
	var x = document.getElementById("form1") ;
	function check(e)
	{
		if(confirm("Are you sure you want to generate the bill now?"))
		{
			x.submit();
		}
		else{
		e.preventDefault();}
	}
</script>
</body>
</html>	