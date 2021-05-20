<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select * from mini_statement";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transaction</title>
		<link rel="stylesheet" href="index.css">
		<link rel="stylesheet" href="button.css">
	<style>
		.nav-ul {
			list-style-type: none;
			margin: 0;
			padding: 5px;
			verflow: hidden;
			
			}

		.nav-li {
		  float:left;
		}

		.nav-li a {
			
		  display: block;
		  color:#010114;
		  text-align: center;
		  padding: 8px 10px;
		  text-decoration: none;
		  text-transform:uppercase;
		}
		.flat-table-1{
			margin-left: auto;
			margin-right: auto;
		}
		body{
			
			background-image:url("images/th.jpg");
			background-repeat: no-repeat;
			background-position:right;
			background: linear-gradient(57deg, #00c6a7, #1e4d92);
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: 0px;
			border:4px solid gray;
			border-collapse:collapse;
			background: transparent;
			
			
			}
		th{
			color:#ffb3ec;
			font-size:26px;
			padding:16px;
			text-transform: uppercase;
		}
		
		td{
			font-size:23px;
			color: ;
			padding: 10px 20px 10px 22px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
			color: whitesmoke;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
			color: ;
		}
		h2{
			padding:20px;
			font-size:35px;
			color:#805a46;
			text-shadow: 1px 1px black;
			text-align:center;
		}
		.btn {
			background:transparent;
			border: none;
			border-radius: 50px;
			color: white;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
		}
		.buttons{
			
			right:42%;
			text-align:left;
		}

		.btn:hover {
			background-color:  whitesmoke;
		}
	</style>
	</head>
	<body>
		<ul class="nav-ul">
	<a href="index.php">
		<li class="nav-li"><button class="btn"><img src="home.png" alt="home" width="65px" height="65px"></button></li>
	</a>
	</ul><br><br><br><br><br><br>

		
		<table class="flat-table-1">
			<tr>
				<th>Sender</th>
				<th>receiver</th>
				<th>Amount</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["receiver"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		
		
	</body>
</html>