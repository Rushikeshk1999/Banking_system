<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name1=$_SESSION['name'];
$q="select sender,amount from mini_statement where receiver='$name1'";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mini Statement</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
		  color:yellow;
		  text-align: center;
		  padding: 8px 10px;
		  text-decoration: none;
		  text-transform:uppercase;
		}
		body{
			
			background-image:url("images/cus1.jpg ");
			background-position:left;
			background-repeat: no-repeat;
			background-size:cover;
			background:linear-gradient(57deg, #00c6a7, #1e4d92);
			
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:2px solid red;
			border-collapse:collapse;
			background:transparent;
			}
		th{
			color:whitesmoke;
			font-size:26px;
			padding:16px;
		}
		
		td{
			font-size:23px;
			color: whitesmoke;
			padding: 10px 20px 10px 22px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
		}
		h2{
			padding:20px;
			font-size:35px;
			color:red;
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
			text-align:center;
		}
		.btn:hover {
			background-color:  whitesmoke;
		}
	</style>
	</head>
	<body>
	<ul class="nav-ul" style="height:53px;">
	<a href="index.php">
	<li class="nav-li"><button class="btn"><img src="home.png" alt="home" width="65px" height="65px"></button></li>
	</a>
	
	</ul><br><br><br>
		<h2><?php echo "Mini Statement of ".$name1?></h2>
		<table class="flat-table-1">
			<tr>
				<th>Sender</th>
				<th>Credits</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		<div>
		<form action="user.php" method="post">
			<div class="buttons">
			<br><button class="glow-on-hover" type="submit" name="name" value="<?php echo $name1 ?>">BACK</button>
			
			</div>
		</form>
		
	</body>
</html>