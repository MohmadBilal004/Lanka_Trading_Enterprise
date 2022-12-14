<?php session_start();

if(!isset($_SESSION["userName"]))
{
	 header('Location:login.php');
}

 if(isset($_POST["Submitbtn"])){
  $userName = $_SESSION["userName"];
  $productID = $_POST["pdtID"];
  $quantity  = $_POST["quantity"];

  $con = mysqli_connect("localhost","root","","it21714948");
	 
  if(!$con) {
    die("Sorry !!! we are facing technical issue"); 
  }
  $sql1= "SELECT * FROM `producttbl` WHERE `productID`= '".$productID."'";
  $result = mysqli_query($con,$sql1);

  if(mysqli_num_rows($result)>0)
	 {
	  while($row = mysqli_fetch_assoc($result))
		{
           $productName =  $row["productName"];
           $productDescription =  $row["productDescription"];
           $productType =  $row["productType"];
           $productPrice =  $row["price"];
           $imagePath = $row["imagePath"];
           
           $sql2 = "INSERT INTO `carttbl`(`cartId`, `email`, `productID`, `productName`, `productType`, `productDescription`, `price`, `quantity`, `imagePath`) VALUES (NULL,'".$userName."','".$productID."','".$productName."','".$productType."','".$productDescription."','".$productPrice."','".$quantity."','".$imagePath."');";
           mysqli_query($con,$sql2);
    }
    header('Location:Products.php');
  }
  
}
?>