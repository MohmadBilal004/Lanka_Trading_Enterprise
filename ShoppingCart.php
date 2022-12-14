<?php session_start();
 $con = mysqli_connect("localhost","root","","it21714948");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container" style = "width:700px">
    <h3>Shopping Cart</h3>
    <?php
    $sql = "SELECT * FROM `producttbl` WHERE `productID` ='".$productID."'";
	 $result = mysqli_query($con,$sql);	
     if(mysqli_num_rows($result)>0)
	 {
		while($row = mysqli_fetch_array($result)) 
		{
    ?>
    <div class = "col-md-4">
            <form method = "post" action="ShoppingCart.php?action=add?id=<php?action">

            </form>
    </div>
    <?php
        }
    }
     ?> 
</div>
</body>
</html>