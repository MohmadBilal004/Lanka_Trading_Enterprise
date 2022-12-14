<?php session_start();
if(!isset($_SESSION["userName"]))
{
	 header('Location:login.php');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Auto-Refinish and Car Care</title>
    <link rel="stylesheet" href="CSS/navigation.css" type="text/css">
    <link rel="stylesheet" href="CSS/View.css" type="text/css">

    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script src="Scripts/navigation.js"></script>
</head>

<body>
<header>
    <div class="logo">
      <h4>Lanka Trading Enterprise</h4>
    </div>
    <nav>
      <ul>
        <li> <a class="index" href="Home2.php">Home</a></li>
        <li> <a class="index" href="AboutUS.php">About Us</a></li>
        <li><a class="index">Stores</a>
          <ul>
            <li><a class="index" href="Products.php">All Products</a></li>
            <li><a class="index" href="Decoraticves2.php">Interior And Exterior Decorative</a></li>
            <li><a class="index" href="Sealants2.php">Sealants</a></li>
            <li><a class="index" href="CarCare2.php">Car Care</a></li>
            <li><a class="index" href="WoodCare2.php">Wood Care</a></li>
            <li><a class="index" href="Accessories2.php">Tools And Accessories</a></li>
          </ul>
        </li>

        <li>
          <a class="index" href="#">My Account</a>
          <ul>
            <li><a class="index" href="Login.php">Log In</a></li>
            <li><a class="index" href="registration.php">Create</a></li>
            <li><a class="index" href="Myaccount2.php">My Account</a></li>
            <li><form action="logout.php" method="post"><input class = "logout" type="submit" name = "Submitbtn" value="Log Out"></form></li>
          </ul>
        </li>
        <li> <a class="index" href="ViewCart.php">View Cart Items</a></li>
      </ul>
    </nav>
  </header>
<br><br><br><br>
    <h1 align = "center"><b>Car Care</b></h1>
<?php
	$con = mysqli_connect("localhost","root","","it21714948");
	
	 if(!$con) 
	 {
		die("Cannot connect with DB server"); 
	 }
	 
	 $sql = "SELECT * FROM `producttbl` WHERE `productType` = 'Auto-Refinish & Car Care';";
	 
	 $result = mysqli_query($con,$sql);	
	
	 if(mysqli_num_rows($result)>0)
	 {
		while($row = mysqli_fetch_assoc($result)) 
		{
			
            echo "
            <div class='wrap'>
            <div class='card'>
                <img src=".$row["imagePath"].">
                <div class='container'>
                <h3>".$row['productName']."</h3> 
                <p>".$row["productType"]."</p>
                <p>Price:".$row["price"]."</p> 
                <p>Quantity:".$row["quantity"]."</p>
                <a class = 'btn' href ='ViewProduct.php?id=".$row["productID"]."'><p>View Product</p></a>
                </div>
            </div>
            </div>
            ";
		}
	 }		
	mysqli_close($con);		
?>
</body>
</html>