<?php session_start();
    
    if(isset($_POST["submitbtn"])){
        $Name = $_POST["txtname"];
        $email = $_POST["txtemail"];
        $subject = $_POST["txtsubject"];
        $message = $_POST["txtmessage"];
       

        $con = mysqli_connect("localhost","root","","it21714948");
	 
	    if(!$con) {
	        die("Sorry !!! we are facing technical issue"); 
	    }
        $sql = "INSERT INTO `feedbacktbl` (`feedbackID`, `name`, `email`, `subject`, `message`) VALUES (NULL, '".$Name."', '".$email."', '".$subject."', '".$message."');";
                    
        if(mysqli_query($con,$sql)){
            echo "Feedback sent Successfully";
        }else{
            echo "Ooops something went wrong, please try again later";
        }

        ///////////////////////////////////////////////////////////////////////////////////////
        $mailto = "mohmadbilal004@gmail.com"; // servers mail address
        $from = $_POST["txtemail"];
        $name = $_POST["txtname"];

        $subject = $_POST["txtsubject"];
        $subject2 = "Your Message submitted successfully || Lanka Trading Enterprise";

        $message = "Client Name: ".$name. "Wrote the following Message "."\n\n". $message;
        $message2 = "Dear ".$name."\n\n"."Thank you for contacting us! We'll get to you shortly";

        $header = "From: ".$from;
        $header2 = "From: ".$mailto;

        $result = mail($mailto, $subject, $message, $header); //send  mail to the web owner
        $result2 = mail($from, $subject2, $message2, $header2);// send mail to client
        
        if($result){
            echo '<script type = "text/javascript">alert("Message sent successfully");</script>';
        }else{
            echo '<script type = "text/javascript">alert("Ooops something went wrong, please try again later");</script>';
        }
        header('Location:Home.php');
        }
?>