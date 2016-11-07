
<?php

$items=[];
$sum=0;
$name=$_POST['Dessert'];
foreach ($name as $Dessert){$items[]=$Dessert;}
echo "<table border=1 class='bill' >";
echo "<tr> <th>Items </th> <th> Price </th> </tr>";
for($x=0;$x<count($items);$x++)
{
	$query="SELECT nm,Price FROM dessert WHERE Name='$items[$x]'";
	$con=mysqli_connect('localhost','root','','food');
$result=$con->query($query);
if ($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{   echo " <tr> <td>".$row['nm']."</td> <td>".$row['Price']."</td></tr>";
		
		$sum=$sum+$row['Price'];
	}
}
	
	
}
 echo "<tr><td colspan=2 align='center'> Grand Total=".$sum."</td></tr>";
 echo "</table>";

?>
<html>
<head>
<style>
	body{
	    background-image: url("chalk.jpg");

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
	padding: 10px 20px;
	border-radius:12px;
	position: absolute;
	left:1200px;
	top:20px;
	
	}
	.button2{
	background-color:black;
	color:white;
	border:none;
	padding: 10px 20px;
	border-radius:12px;
	position: absolute;
	left:1300px;
	top:20px;
	
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
    .bill{
		position:absolute;
		top:200px;
		left:400px;
		height:20em;
		width:30em;
		font-weight:bold;
		font-size:22px;
		background-color:white;

	}
	</style>
</head>
<body>
<div class="heading">
	<h1 style="color:white; font-family:Cambria">
	Food Factory
	</h1>
<pre>                                <img src="icon.png" width=50 height=50>       <a href="#"><button class="button2">Logout</button> </a> <a href="home.html"><button class="button">Home</button> </a></p>
</pre>
</div>
</body>
</html>

