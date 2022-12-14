<?php session_start();
if(!isset($_SESSION["userName"]))
{
	 header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="CSS/navigation.css" type="text/css" rel="stylesheet" />
    <link href="CSS/additem.css" type="text/css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script src="Scripts/navigation.js"></script>

    <title>Update Products</title>
</head>
<body>
<header>
    <div class="logo">
      <h4>Lanka Trading Enterprise</h4>
    </div>
    <nav>
      <ul>
        <li> <a class="index" href="file:///C:/Users/TAATAN/Desktop/WAD%20Project/Main.html">Home</a></li>
        <li> <a class="index" href="AboutUS.php">About Us</a></li>
        <li><a class="index">Stores</a>
          <ul>
            <li><a class="index" href="Login.php">All Products</a></li>
            <li><a class="index" href="Login.php">Interior And Exterior Decorative</a></li>
            <li><a class="index" href="registration.php">Sealants</a></li>
            <li><a class="index" href="registration.php">Car Care</a></li>
            <li><a class="index" href="registration.php">Wood Care</a></li>
            <li><a class="index" href="registration.php">Tools And Accessories</a></li>
          </ul>
        </li>

        <li>
          <a class="index" href="#">My Account</a>
          <ul>
            <li><a class="index" href="Login.php">Log In</a></li>
            <li><a class="index" href="registration.php">Create</a></li>
            <li><a class="index" href="Myaccount.php">My Account</a></li>
            <li><form action="logout.php" method="post"><input class = "logout" type="submit" name = "Submitbtn" value="Log Out"></form></li>
          </ul>
        </li>
        <li> <a class="index" href="Login.php">Add Products</a></li>
      </ul>
    </nav>
  </header>
  <?php
  $con = mysqli_connect("localhost","root","","it21714948");
	 
  if(!$con) {
    die("Sorry !!! we are facing technical issue"); 
  }
  $sql = "SELECT * FROM `producttbl` WHERE `productID`=".$_GET["id"]."";
  $result = mysqli_query($con,$sql);

  if(mysqli_num_rows($result)>0)
	 {
		$row = mysqli_fetch_assoc($result);

  ?>
   
      <div class="add-box">
        <h1>Update Product Details</h1>
        <form method="post" action="updateHandler.php?id=<?php echo $_GET["id"]; ?>" enctype="multipart/form-data">
            

                <label>Prodcut Name</label>
                <input type="text" id="txtProduct" name="txtProduct" placeholder="Enter Product Name" value = "<?php echo $row["productName"]; ?>" required><br><br><br>

                <label>Type of the Product</label>
                <select name="lstCategory"productType  value = "<?php if($row["productType"] == "Wall Paints"){ echo "Wall Paints";};?>">
                    <option value="WallPaints">Wall Paints</option>
                    <option value="sealents">Sealants and Adhesives</option>
                    <option value="AutoPaint">Auto Paints </option>
                    <option value="woodcare">Wood Care</option>
                    <option value="tools">Tools And Accessories</option>
                </select>
                <br><br><br>

                <label>Prodcut Description</label>
                <textarea  id="txtDescription" name="txtDescription" value = "<?php echo $row["productDescription"]; ?>"></textarea><br><br><br>

                <label>Prodcut Image</label>
                <input type="file" name="imageFile" id = "imageFile"  value = "<?php echo $row["imagePath"]; ?>" /><br><br><br>

                <label>Select color:</label>
               <input type="color" id="favcolor" name="favcolor" value = "<?php echo $row["color"]; ?>" />
               <p align = "center">This colors will not be applied on waterbase prservatives</p><br><br><br>

                <label>Price</label>
                <input type="number" id="txtPrice" name="txtPrice"  value = "<?php echo $row["price"]; ?>" /><br><br><br>

                <label>Quantity</label>
                <input type="number" id="txtQuantity" name="txtQuantity"   value = "<?php echo $row["quantity"]; ?>" />
                <br><br>
           <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <input type="submit" name="Submitbtn" id="Submitbtn" value="Update Values" >
               <input  type="reset" name="resetbtn" id="resetbtn" value="Cancel">
           <?php
           }
              mysqli_close($con);
           ?>
        </form>
        </div>
</body>
</html>