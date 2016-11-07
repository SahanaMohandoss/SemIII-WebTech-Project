
<html>
<head>
		
	<link rel="shortcut icon" href="icon.png">
	<title> 
		
		Frozen Bear
	</title>
	<style>
	body{background-image:url(DessertBG.jpeg); }
	.heading{
	position:fixed;
	top:0;
	left:0;
	background-color:#3366ff; 
	width:100%;
	height:75px;
	
	}
	.button{
	background-color:black;
	color:white;
	border:none;
	padding: 10px 20px;
	border-radius:12px;
	
	}
	.button:hover{
		box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    }
		p{
	position:fixed;
    top:15px;
	right:20px;
	font-size:15px;

	font-family:"Georgia";
	}
		h1{
	position:fixed;
	top:2px;
	left:20px;
	
	}

	
	div {
	text-align:center;
	color:black;
	}
	.Name{
		position:relative;
		top:70px;
		font-family:cursive;
		font-size:50px;
		padding: 5px;
    margin: 5px;}

	.Review{
		position:relative;
		top:70px;
		font-family:cursive;
		font-size:50px;
		padding: 5px;
    margin: 5px;
	}
	a:link{ color:black;}
	a:visited{ color:black;}
	a:hover{ color:blue;}
	a:focus{ color:red;}
	.Menu{

		
	background-image:url(DessertMenuBG.jpeg);
	border: solid 5px black;
	position:relative;
	left:370px;
	top:70px;
	width:600px;
	padding:0px;
	margin:0px;
	}
	.Menutitle{
	background-color:black;
	position:realtive;
	font-family:cursive;
		font-size:30px;
		color:white;
		padding: 5px;
    margin: 0px;
	}
	.qty{
	width=20px;
	}
	</style>
</head>
<body>
	
	<div class="Menu">
		<div class="Menutitle"><b>MENU</b></div>
	<form action="frozenbearbill.php"  method="post" id="form1">
	<table width = 500px >
	<tr><th>Cakes:</th></tr>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" class="cb" name="Dessert[]" id="Dessert" value="CakeLT"></td><td>Lemon Tart</td><td>80</td><td> </tr><br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" class="cb" name="Dessert[]" id="Dessert"  value="CakeOP"></td><td>Oreo Pie</td><td>90</td><td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" class="cb" name="Dessert[]" id="Dessert"  value="CakeMMP"></td><td>Mississipi Mud Pie</td><td>100</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" class="cb" name="Dessert[]" id="Dessert"  value="CakeCCC"></td><td>Chocolate Cup Cake</td><td>60</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" class="cb" name="Dessert[]" id="Dessert"  value="CakeRVCC"></td><td>Red Velvet Cup Cake</td><td>65</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" class="cb" name="Dessert[]" id="Dessert" value="CakeE"></td><td>Eclair</td><td>50</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" class="cb" name="Dessert[]" id="Dessert"  value="CakePC"></td><td>Plain Cheesecake</td><td>60</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" class="cb"name="Dessert[]" id="Dessert"  value="CakeNC"></td><td>Nutella Cheesecake</td><td>80</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" class="cb" name="Dessert[]" id="Dessert"  value="CakeCM"></td><td>Chocolate Moussee</td><td>70</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" class="cb"name="Dessert[]" id="Dessert"  value="CakeFB"></td><td>Fudge Brownie</td><td>90</td></tr> <br>
	 </table>
	 <table width = 500px >
	  <tr><th>MilkShakes:</th></tr>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" name="Dessert[]" id="Dessert"  value="shakeS"></td><td>Strawberry </td><td>90</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" name="Dessert[]" id="Dessert"  value="shakeO"></td><td>Oreo </td><td>90</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" name="Dessert[]" id="Dessert"  value="shakeC"></td><td>Chocolate</td><td>90</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" name="Dessert[]" id="Dessert"  value="shakeV"></td><td>Vanilla </td><td>80</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" name="Dessert[]" id="Dessert"  value="shakeM"></td><td>Mocha</td><td>90</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" name="Dessert[]" id="Dessert"  value="shakeB"></td><td>Banana </td><td>90</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" name="Dessert[]" id="Dessert"  value="shakeL"></td><td>Lychee</td><td>100</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" name="Dessert[]" id="Dessert"  value="shakeBC"></td><td>Banana Caramel</td><td>110</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" name="Dessert[]" id="Dessert"  value="shakeCM"></td><td>Chocolate Malt</td><td>100</td></tr> <br>
	  </table>
	  	 <table width = 500px >
	  <tr><th>Ice Cream:</th></tr>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" name="Dessert[]" id="Dessert" value="iceS"></td><td>Strawberry </td><td>80</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" name="Dessert[]" id="Dessert"  value="iceP"></td><td>Pista </td><td>80</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" name="Dessert[]" id="Dessert"  value="iceC"></td><td>Chocolate</td><td>90</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" name="Dessert[]" id="Dessert"  value="iceV"></td><td>Vanilla </td><td>70</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" name="Dessert[]" id="Dessert"  value="iceM"></td><td>Mocha</td><td>90</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" name="Dessert[]" id="Dessert"  value="iceB"></td><td>Banana </td><td>90</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" name="Dessert[]" id="Dessert"  value="iceL"></td><td>Lychee</td><td>100</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" name="Dessert[]" id="Dessert"  value="iceBC"></td><td>Banana Caramel</td><td>110</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" name="Dessert[]" id="Dessert"  value="iceCCV"></td><td>Choco Chip Vanilla</td><td>100</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" name="Dessert[]" id="Dessert"  value="iceRR"></td><td>Rocky Road</td><td>110</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" name="Dessert[]" id="Dessert"  value="iceCC"></td><td>Caramel Crunch</td><td>100</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" name="Dessert[]" id="Dessert"  value="iceBS"></td><td>Butterscotch</td><td>80</td></tr> <br>
	  <tr><td> &nbsp &nbsp  &nbsp  &nbsp  <input type="checkbox" name="Dessert[]" id="Dessert"  value="iceBLC"></td><td>Black Currant</td><td>90</td></tr> <br>
	  </table>
	  <br><br><br><br>
	  <input type="submit" id="sub" value="Done"><br><br>
	</form>
	
	</div>
	<div class="heading">
		<h1 style="color:white; font-family:Cambria;" >
		  Frozen Bear <img src="icelogo.png" width=50 height=50> <p> Ratings: <img src ="Rate.png"  alt = "Photo" width="100px" height="20px"/>   </p>
		  
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
	document.getElementById("sub").addEventListener("click", check,false);
	
</script>




</body>
</html>
