<?php session_start();
    
    $productID = $_GET["id"];


    if(isset($_POST["Submitbtn"])){
        $pdtName = $_POST["txtProduct"];
        $pdtType = $_POST["lstCategory"];
        $pdtDescription = $_POST["txtProduct"];
        $image = "uploads/".basename($_FILES["imageFile"]["name"]);
        move_uploaded_file($_FILES["imageFile"]["tmp_name"],$image);
        $pdtcolor = $_POST["favcolor"];
        $pdtPrice = $_POST["txtPrice"];
        $pdtQuantity = $_POST["txtQuantity"];

        $con = mysqli_connect("localhost","root","","it21714948");
	 
	    if(!$con) {
	        die("Sorry !!! we are facing technical issue"); 
	    }

        $sql = " UPDATE `producttbl` SET `productName`='".$pdtName."',`productType`='".$pdtType."',`productDescription`='".$pdtDescription."',`imagePath`='".$image."',`color`='".$pdtcolor."',`price`='".$pdtPrice."',`quantity`='".$pdtQuantity."' WHERE `productID`= '".$productID."'";
                    
        if(mysqli_query($con,$sql)){
            echo "File Updated Successfully";
        }else{
            echo "Could not update Please check the form again";
        }
        header('Location:Store.php');
        }
?>