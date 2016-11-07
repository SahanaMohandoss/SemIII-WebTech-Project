<?php

$items=[];
$sum=0;
$name=$_POST['Chinese'];
foreach($name as $x){$items[]=$x;}
echo "<table  class='bill' >";
echo "<tr> <th>Items </th> <th> Price </th> </tr>";
for($x=0;$x<count($items);$x++)
{
	$query="SELECT nm,Price FROM chinese WHERE Name='$items[$x]'";
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
<link rel="stylesheet" type="text/css" href="bill.css?v=1.1">
<style>
 body{
	    
		background-image:url("designbg.jpg");

	}
    .bill{
		position:fixed;
		top:150px;
		left:500px;
		font-weight:bold;
		font-size:22px;
		width:500px;
		height:500px;
		background-image:url("billbg2.png");
		opacity: 1;
		border-radius:20px;
		text-align:center;
		border-collapse:collapse;
		//box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);

	
	}
	.button{
	position: fixed;
	left: 1100px;
	top:15px;
	}
	.button2{
		position: fixed;
		left: 1200px;
		top:15px;
	}
	.Thank{
		position: fixed;
		left: 70px;
		top:100px;
		text-align:center;
		color: white;
		font-family:fantasy;
		font-size: 25px;
	}
	th{
		color:#336600;
		font-weight:bold;
	}
	</style>
</head>
<body >
<div class="Thank"> Thank You for orderding from Food Factory! Your order has been placed and food should be deivered in 30 mins!</div>
<div class="heading">
	<h1 style="color:white; font-family:Cambria">
	Food Factory
	</h1>
<pre>                                <img src="icon.png" width=50 height=50>       <a href="firstpg.php"><button class="button2">Logout</button> </a> <a href="home.html"><button class="button">Home</button> </a></p>
</pre>
</div>

</body>
</html>
