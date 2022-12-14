<?php session_start();
   
    $cartID = $_GET["id"];

    $con = mysqli_connect("localhost","root","","it21714948");
	 
	    if(!$con) {
	        die("Sorry !!! we are facing technical issue"); 
	    }

        $sql = "DELETE FROM `carttbl` WHERE `cartId` = ".$cartID."'";
                    
        if(mysqli_query($con,$sql)){
            echo "File Deleted Successfully";
        }else{
            echo "Could not Delete";
        }
        header('Location:Store.php');
     
?>