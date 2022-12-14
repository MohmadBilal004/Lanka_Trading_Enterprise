<?php session_start();
 if(isset($_POST["Submitbtn"]))
 {
	 $userName = $_POST["txtEmail"];
	 $password = $_POST["txtPassword"];
	 
	 $con = mysqli_connect("localhost","root","","it21714948");
	 
	 if(!$con) 
	 {
		die("Sorry !!! we are facing technical issue"); 
	 }
	 
	 $sql = "SELECT * FROM `registeration` WHERE `Email` = '".$userName."' and `Password` = '".$password."'";
	 
	 $result = mysqli_query($con,$sql);	 
	 
	 if(mysqli_num_rows($result)>0)
	 {
		 //Create session 
		 $_SESSION["userName"] = $userName;
		 if($userName == "mohmadbilal004@gmail.com"){
			header('Location:Home.php');
		 }else{
			header('Location:Home2.php');
		 }
		
	 }
	 else
	 {
		  header('Location:login.php');
          echo "Please enter correct username and password";
	 } 
 }
?>
