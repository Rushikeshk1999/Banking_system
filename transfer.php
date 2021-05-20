<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'banking_system');
$q = "select name from users";
$result = mysqli_query($con, $q);
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="button.css">
	<style>
		body {
			text-align: center;
		}

		body {

			background-image: url("images/1.png.gif");
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			object-fit: cover;
			background: linear-gradient(57deg, #00c6a7, #1e4d92);
		}

		html,
		body {
			height: 100%;
			width: 100%;

		}

		html {
			display: table;
			margin: auto;
		}

		body {
			display: table-cell;
			
		}

		.center {
			display: inline-block;
			background: transparent;
			padding: 50px;
			border: 2px ridge red;
			
		}

		.ho {
			padding-top: 50px;
		}

		.butto1 {
			background-color: #bebebe;
		}
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
		.btn {
			background:transparent;
			border: none;
			border-radius: 50px;
			color: white;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
		}
		
		.btn:hover {
			background-color:  whitesmoke;
		}


		.button {
			border-radius: 10px;
			border: 1px solid black;
			height: 51px;
			width: 218px;
			margin: auto;
			overflow: hidden;
			cursor: pointer;
			color: #28048a;
			font-size: 17px;
			font-weight: bold;
			background: #ffffcc;

		}

		.button:hover { 
			background-color: #0039e6;
		}
	</style>
	<script>
		
		function random_function() {
			var a = document.getElementById("input").value;
			if (a === "shivdeep") {
				var arr = ["Prasad", "Vikram", "Pallavi", "Priya", "Tanuja", "Mayuri", "Vaishnavi", "Swapnil", "Divya"];
			} else if (a === "Prasad") {
				var arr = ["shivdeep", "Vikram", "Pallavi", "Priya", "Tanuja", "Mayuri", "Vaishnavi", "Swapnil", "Divya"];
			} else if (a === "Vikram") {
				var arr = ["shivdeep", "Prasad", "Pallavi", "Priya", "Tanuja", "Mayuri", "Vaishnavi", "Swapnil", "Divya"];
			} else if (a === "Pallavi") {
				var arr = ["shivdeep", "Prasad", "Vikram", "Priya", "Tanuja", "Mayuri", "Vaishnavi", "Swapnil", "Divya"];
			} else if (a === "Priya") {
				var arr = ["shivdeep", "Prasad", "Vikram", "Pallavi", "Tanuja", "Mayuri", "Vaishnavi", "Swapnil", "Divya"];
			} else if (a === "Tanuja") {
				var arr = ["shivdeep", "Prasad", "Vikram", "Pallavi", "Priya", "Mayuri", "Vaishnavi", "Swapnil", "Divya"];
			} else if (a === "Mayuri") {
				var arr = ["shivdeep", "Prasad", "Vikram", "Pallavi", "Priya", "Tanuja", "Vaishnavi", "Swapnil", "Divya"];
			} else if (a === "Vaishnavi") {
				var arr = ["shivdeep", "Prasad", "Vikram", "Pallavi", "Priya", "Tanuja", "Mayuri", "Swapnil", "Divya"];
			} else if (a === "Swapnil") {
				var arr = ["shivdeep", "Prasad", "Vikram", "Pallavi", "Priya", "Tanuja", "Mayuri", "Vaishnavi", "Divya"];
			} else if (a === "Divya") {
				var arr = ["shivdeep", "Prasad", "Vikram", "Pallavi", "Priya", "Tanuja", "Mayuri", "Vaishnavi", "Swapnil"];
			}
			var string = "";

			for (i = 0; i < arr.length; i++) {
				string = string + "<option value=" + arr[i] + ">" + arr[i] + "</option>";
			}
			document.getElementById("output").innerHTML = string;
		}
	</script>
</head>

<body>
<ul class="nav-ul">
<a href="index.php">
		<li class="nav-li"><button class="btn"><img src="home.png" alt="home" width="65px" height="65px"></button></li>
	</a>
	</ul>
	
	<h1 style=" font-size:45px;color:#e0115f;text-shadow: 1.5px 1.5px black;">Transfer Amount</h1><br>
	<div class="center">
		<form action="updatecredit.php" method="post">
			<label for="sender" align="left">Senders Name: &nbsp;</label>
			<select id="input" name="sender" style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
				<option selected>Select Name</option>
				<option value="Shivdeep">Shivdeep</option>
				<option value="Prasad">Prasad</option>
				<option value="Vikram">Vikram</option>
				<option value="Pallavi">Pallavi</option>
				<option value="Priya">Priya</option>
				<option value="Tanuja">Tanuja</option>
				<option value="Mayuri">Mayuri</option>
				<option value="Vaishnavi">Vaishnavi</option>
				<option value="Swapnil">Swapnil</option>
				<option value="Divya">Divya</option>
			</select><br><br>
			<label for="receiver" align="left">Receiver Name:&nbsp;</label>
			<select id="output" name="receiver" style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()">
			<option selected>Select Name</option>
				<option value="Shivdeep">Shivdeep</option>
				<option value="Prasad">Prasad</option>
				<option value="Vikram">Vikram</option>
				<option value="Pallavi">Pallavi</option>
				<option value="Priya">Priya</option>
				<option value="Tanuja">Tanuja</option>
				<option value="Mayuri">Mayuri</option>
				<option value="Vaishnavi">Vaishnavi</option>
				<option value="Swapnil">Swapnil</option>
				<option value="Divya">Divya</option>
			</select><br><br>

			</select><br><br>
			<label for="transfer" align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
			<input type="number" name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
			<div class="button1">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='#28048a'" type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
			</div>
		</form>
	</div><br><br><br>
	
</body>

</html>