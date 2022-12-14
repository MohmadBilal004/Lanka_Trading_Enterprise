<?php session_start();
if(!isset($_SESSION["userName"])){
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
    <title>Add Product</title>
</head>

<body>
<header>
    <div class="logo">
      <h4 >Lanka Trading Enterprise</h4>
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
    <div class="add-box">
    <h1>Add Product Details</h1>
        <form method="post" action="AddProduct.php" enctype="multipart/form-data">
            

                <label>Prodcut Name</label>
                <input type="text" id="txtProduct" name="txtProduct" placeholder="Enter Product Name" required><br><br><br>

                <label>Type of the Product</label>
                <select name="lstCategory">
                    <option value="Interior and Exterior Decoratives">Interior and Exterior Decoratives</option>
                    <option value="Sealants and Adhesives">Sealants and Adhesives</option>
                    <option value="Auto-Refinish & Car Care">Auto-Refinish & Car Care</option>
                    <option value="Wood Care">Wood Care</option>
                    <option value="Tools And Accessories">Tools And Accessories</option>
                </select>
                <br><br><br>

                <label>Prodcut Description</label>
                <textarea  id="txtDescription" name="txtDescription" placeholder="Description of the product"></textarea><br><br><br>

                <label>Prodcut Image</label>
                <input type="file" name="imageFile" id = "imageFile" placeholder="Upload a Picture" required><br><br><br>

                <label>Select color:</label>
               <input type="color" id="favcolor" name="favcolor" required>
               <p align = "center">This colors will not be applied on waterbase prservatives</p><br><br><br>

                <label>Price</label>
                <input type="number" id="txtPrice" name="txtPrice" placeholder="Enter Price" required><br><br><br>

                <label>Quantity</label>
                <input type="number" id="txtQuantity" name="txtQuantity" placeholder="Enter quantity" required>
                <br><br>
                <?php
                if(isset($_POST["Submitbtn"])){
                    $pdtName = $_POST["txtProduct"];
                    $pdtType = $_POST["lstCategory"];
                    $pdtDescription = $_POST["txtDescription"];
                    $image = "uploads/".basename($_FILES["imageFile"]["name"]);
                    move_uploaded_file($_FILES["imageFile"]["tmp_name"],$image);
                    $pdtcolor = $_POST["favcolor"];
                    $pdtPrice = $_POST["txtPrice"];
                    $pdtQuantity = $_POST["txtQuantity"];

                    $con = mysqli_connect("localhost","root","","it21714948");
	 
	                if(!$con) {
	                	die("Sorry !!! we are facing technical issue"); 
	                }

                    $sql = "INSERT INTO `producttbl`(`productID`, `productName`, `productType`, `productDescription`, `imagePath`, `color`, `price`, `quantity`, `Email`) VALUES (NULL,'".$pdtName."','".$pdtType."','".$pdtDescription."','".$image."','".$pdtcolor."','".$pdtPrice."','".$pdtQuantity."','".$_SESSION["userName"]."')";
                    
                    if(mysqli_query($con,$sql)){
                        echo "Product Uploaded Successfully";
                    }else{
                        echo "Could not upload Please check the form again";
                    }
              }
                ?>
           <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <input  type="submit" name="Submitbtn" id="Submitbtn" value="Add Product">
           <input  type="reset" name="resetbtn" id="resetbtn" value="Cancel">
        </form>
        </div>
</body>

</html>