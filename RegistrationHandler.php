<?php session_start();
if(isset($_POST["Submitbtn"])){
    $Fname = $_POST["txtFname"];
    $Lname = $_POST["txtLname"];
    $Email = $_POST["txtEmail"];
    $Number = $_POST["txtNumber"];
    $password = $_POST["txtPassword"];
    $confirm = $_POST["txtPass"];
}
if($password ==$confirm ){
    $con = mysqli_connect("localhost", "root", "", "it21714948");

    if(!$con){
        die("Cannot connect to Database Server"); 
    }

    $sql = "INSERT INTO `registeration` (`FirstName`, `LastName`, `Email`, `Number`, `Password`) VALUES ('". $Fname."', '". $Lname."', '". $Email."', '". $Number."', '". $password."');"; 
    mysqli_query($con, $sql);

    header('Location:Login.php');
}
?>