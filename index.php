<html>
<head>
    <title>Basic Banking System</title>
    <link rel="shortcut icon" href="images/cm.png">
   
	<link rel="stylesheet" href="one.css">
	<style>
	*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.site-header{
    width: 100%;
    height: 100vh;
    background: linear-gradient(57deg,#00c6a7,#1e4d92);
    clip-path:polygon(0% 0%,100% 0%,100% 90%,0% 100%);
}
nav{
    width:100%;
    height: 100px;
    display: flex;
    color: white;
}
.logo{
    width: 50%;
    height: 100px;
}
.logo h1{
    line-height: 100px;
    padding-left: 50px;
    font-family: sans-serif;
}
.menu{
    width: 50%;
    height: 100px;
    background-color;
}
.menu ul{
    width: 100%;
    height: 100px;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
}
.menu ul li{
    list-style: none;
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
}
.menu ul li a{
    color: white;
    
}
section{display: flex;}
.leftside{
    width: 45%;
    height: auto;
    overflow: hidden;
    margin-top: 20px;
    margin-left: 60px;
    
}
.leftside img{
    width: 600px;
    height:500px;
    border: 2px solid black;
    border-radius: 20px 120px;
    

}
.rightside{
    width: 55%;
    height: 300px;
    color: white;
    text-align: center;
    margin-top: 80px;
    padding: 40px;
}
.rightside h1{
    text-align: center;
    color: thistle;
    font-size: 50px;
    font-weight: 900;
    text-transform: uppercase;

}
.rightside h1{
    font-size: 100px;
}
.rightside h3{
    font-size: 70px;
}
	</style>
</head>
<body >

<header class="site-header">
        <nav>
			<div>
			
			</div>
            <div class="logo">
				
                <h1>
				<img src="sparklogo.png" height="80px" width="80px"> Sparks
                </h1>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="getdetail.php">View User</a></li>
                    <li><a href="transfer.php">Transfer</a></li>
                    <li><a href="transaction.php">History</a></li>
                </ul>

            </div>
        </nav>
        <section>
            <div class="leftside">
                <img src="banking.jpg" alt="Image">
            </div>
            <div class="rightside">
                <h1>Welcome</h1>
                <h3>Sparks Bank</h3>
            </div>
		
        
        </section>

    </header>
	    
</body>
</html>