<?php session_start();
if(!isset($_SESSION["userName"]))
{
	 header('Location:login.php');
}
?>
<html>
    <head>
        <title>Sign In</title>
        <link href="CSS/myaccount.css" type="text/css" rel="stylesheet" />
        <link href="CSS/navigation.css" type="text/css" rel="stylesheet" />

        <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
        <script src="Scripts/navigation.js"></script>
        </head>
    </head>
    <body>
    <?php
  $con = mysqli_connect("localhost","root","","it21714948");
	 
  if(!$con) {
    die("Sorry !!! we are facing technical issue"); 
  }
  $sql = "SELECT * FROM `registeration` WHERE `Email` = '".$_SESSION["userName"]."'";
  $result = mysqli_query($con,$sql);

  if(mysqli_num_rows($result)>0)
	 {
		$row = mysqli_fetch_assoc($result);

  ?>
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
        <div class = "signinbox">
            <img src = "Images/Avatar.jpg" class = "Avatar">
            <h1>My Account</h1>
            <form  method = "post" action = "RegistrationHandler.php" >
                <p>First Name</p>
                <input type = "text" id = "txtFname" name = "txtFname" value = "<?php echo $row["FirstName"]; ?>"readonly>
                <p>Last Name</p>
                <input type = "text" id = "txtLname" name = "txtLname"value = "<?php echo $row["LastName"]; ?>"  readonly>
                <p>Email</p>
                <input type = "text" id = "txtEmail" name = "txtEmail"value = "<?php echo $row["Email"]; ?>"  readonly>
                <p>Contact Number</p>
                <input type = "number" id = "txtNumber" name = "txtNumber"value = "<?php echo $row["Number"]; ?>"  readonly>
               <a href="Home.php"><input type="button" class = "button" value = "Return"></a>
            </form>
        </div>
        <?php
           }
              mysqli_close($con);
           ?>
    </body>
</html>