<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'banking_system');

$q = "select * from users ";
$result = mysqli_query($con, $q);
$row_count = mysqli_num_rows($result);


?>
<html>

<head>
	<title>viewUser</title>
	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="button.css">

	<style>
		body {
			text-align: center;
		}

		.flat-table-1 {

			width: 100%;
			height: 100vh;
			background: linear-gradient(57deg, #00c6a7, #1e4d92);

		}
		}

		.flat-table-1 tr:hover {
			background: rgba(0, 0, 0, 0.19);
		}

		h1 {
			font-family: Arial, Times, serif;
		}

		table {
			text-align: center;
			margin-left: auto;
			margin-right: auto;
			border: 4px solid black;
			border-collapse: collapse;
		}

		th {
			color: #ffb3b3;
			font-size: 24px;
			padding: 16px;
		}

		td {
			text-align: center;
			font-size: 22px;
			color: whitesmoke;
			padding: 0px 20px 0px 20px;
		}

		tr {
			transition: background 0.3s, box-shadow 0.3s;
		}

		th,
		td {
			border-collapse: collapse;
			border: 2px groove gray;
			text-shadow: 1px 1px black;
		}

		.css-button {
			margin-left: auto;
			margin-right: auto;
			
		}

		.button1 {
			background-color: linear-gradient(57deg, #00c6a7, #1e4d92);
			
			text-align: left;
			padding-top: 2px;
		}

		.button1:hover {
			background-color: paleturquoise;
		}

		.view {
			top: 50%;
			padding-top: 20px;
			text-align: center;
		}

		.ho {
			padding-top: 50px;
			padding-bottom: 100px;
		}
		.buttons{
			background:transparent;
			border: none;
			border-radius: 50px;
			color: white;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
			align-items: left;
			float: left;
			

		}
		.glow-on-hover{
			background:transparent;
			border: none;
			border-radius: 50px;
			color: white;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;


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
		.buttons{
			
			right:42%;
			text-align:left;
		}
		.btn:hover {
			background-color:  whitesmoke;
		}
		body {

			background-image: url("images/bk.png");
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;

			width: 100%;
			height: 100vh;
			background: linear-gradient(57deg, #00c6a7, #1e4d92);




		}
	</style>

</head>

<body>
		
	<ul class="nav-ul">
	<a href="index.php">
		<li class="nav-li"><button class="btn"><i class="fa fa-home"><img src="home.png" width="45px" height="45px"></i></button></li>
	</a>
	</ul>
	<h1 style="color: whitesmoke;text-shadow: 2px 2px black;">User Information</h1>
	<table class="flat-table-1">
		<thead>
			<th>NO.</th>
			<th>Name</th>
			<th>Email</th>
			<th>Credit</th>
			<th></th>
		</thead>
		<tbody>
			<tr>
				<?php
					$row = mysqli_fetch_array($result);
				?>
				<td> 1</td>
				<td><?php echo  $row["name"]; ?></td>
				<td><?php echo  $row["email"]; ?></td>
				<td><?php echo  $row["amount"]; ?></td>
				<td>
					<form action="user.php" method="post" class="view">
						<button class="button1" type="submit" name="name" value="Shivdeep">View</button>
					</form>
				</td>
			</tr>
			<tr>
				<?php
					$row = mysqli_fetch_array($result);
				?>
				<td> 2</td>
				<td><?php echo  $row["name"]; ?></td>
				<td><?php echo  $row["email"]; ?></td>
				<td><?php echo  $row["amount"]; ?></td>
				<td>
					<form action="user.php" method="post" class="view">
						<button class="button1" type="submit" name="name" value="Prasad">View</button>
					</form>
				</td>
			</tr>
			<tr>
				<?php
					$row = mysqli_fetch_array($result);
				?>
				<td> 3</td>
				<td><?php echo  $row["name"]; ?></td>
				<td><?php echo  $row["email"]; ?></td>
				<td><?php echo  $row["amount"]; ?></td>
				<td>
					<form action="user.php" method="post" class="view">
						<button class="button1" type="submit" name="name" value="Vikram">View</button>
					</form>
				</td>
			</tr>
			<tr>
				<?php
					$row = mysqli_fetch_array($result);
				?>
				<td> 4</td>
				<td><?php echo  $row["name"]; ?></td>
				<td><?php echo  $row["email"]; ?></td>
				<td><?php echo  $row["amount"]; ?></td>
				<td>
					<form action="user.php" method="post" class="view">
						<button class="button1" type="submit" name="name" value="Pallavi">View</button>
					</form>
				</td>


			</tr>
			<tr>
				<?php
					$row = mysqli_fetch_array($result);
				?>
				<td> 5</td>
				<td><?php echo  $row["name"]; ?></td>
				<td><?php echo  $row["email"]; ?></td>
				<td><?php echo  $row["amount"]; ?></td>
				<td>
					<form action="user.php" method="post" class="view">
						<button class="button1" type="submit" name="name" value="Priya">View</button>
					</form>
				</td>
			</tr>
			<tr>
				<?php
					$row = mysqli_fetch_array($result);
				?>
				<td> 6</td>
				<td><?php echo  $row["name"]; ?></td>
				<td><?php echo  $row["email"]; ?></td>
				<td><?php echo  $row["amount"]; ?></td>
				<td>
					<form action="user.php" method="post" class="view">
						<button class="button1" type="submit" name="name" value="Tanuja">View</button>
					</form>
				</td>
			</tr>
			<tr>
				<?php
					$row = mysqli_fetch_array($result);
				?>
				<td> 7</td>
				<td><?php echo  $row["name"]; ?></td>
				<td><?php echo  $row["email"]; ?></td>
				<td><?php echo  $row["amount"]; ?></td>
				<td>
					<form action="user.php" method="post" class="view">
						<button class="button1" type="submit" name="name" value="Mayuri">View</button>
					</form>
				</td>
			</tr>
			<tr>
				<?php
					$row = mysqli_fetch_array($result);
				?>
				<td> 8</td>
				<td><?php echo  $row["name"]; ?></td>
				<td><?php echo  $row["email"]; ?></td>
				<td><?php echo  $row["amount"]; ?></td>
				<td>
					<form action="user.php" method="post" class="view">
						<button class="button1" type="submit" name="name" value="Vaishnavi">View</button>
					</form>
				</td>
			</tr>
			<tr>
				<?php
					$row = mysqli_fetch_array($result);
				?>
				<td> 9</td>
				<td><?php echo  $row["name"]; ?></td>
				<td><?php echo  $row["email"]; ?></td>
				<td><?php echo  $row["amount"]; ?></td>
				<td>
					<form action="user.php" method="post" class="view">
						<button class="button1" type="submit" name="name" value="Swapnil">View</button>
					</form>
				</td>
			</tr>
			<tr>
				<?php
					$row = mysqli_fetch_array($result);
				?>
				<td> 10</td>
				<td><?php echo  $row["name"]; ?></td>
				<td><?php echo  $row["email"]; ?></td>
				<td><?php echo  $row["amount"]; ?></td>
				<td>
					<form action="user.php" method="post" class="view">
						<button class="button1" type="submit" name="name" value="Divya">View</button>
					</form>
				</td>
			</tr>
		</tbody>
	</table><br><br>

	
</body>

</html>