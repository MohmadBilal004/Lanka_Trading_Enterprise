<?php 
    if(isset($_POST['submitbtn'])){
                $mailto = "mohmadbilal004@gmail.com"; // servers mail address
                $from = $_POST["txtemail"];
                $name = $_POST["txtname"];

                $subject = $_POST["txtsubject"];
                $subject2 = "Your Message submitted successfully || Lanka Trading Enterprise";

                $message = "Client Name: ".$name. "Wrote the following Message "."\n\n".$_POST["txtmessage"];
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
            }
?>
<html>
    <head>
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" type = "text/css" href = "CSS/AboutUS.css">
        <link rel = "stylesheet" type="text/css" href = "CSS/navigation.css">
        <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
        <script src="Scripts/navigation.js"></script>
        <title>Contact Us</title>
    </head>
    <body>
    
    <header>
    <div class="logo">
      <h4>Lanka Trading Enterprise</h4>
    </div>
    <nav>
      <ul>
        <li> <a class="index" href="Home.php">Home</a></li>
        <li> <a class="index" href="AboutUS.php">About Us</a></li>

        <li>
          <a class="index" href="#">My Account</a>
          <ul>
            <li><a class="index" href="Login.php">Log In</a></li>
            <li><a class="index" href="registration.php">Create</a></li>
            <li><a class="index" href="Myaccount.php">My Account</a></li>
            <li><form action="logout.php" method="post"><input class = "logout" type="submit" name = "Submitbtn" value="Log Out"></form></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
<br><br><br>
        <section class = "contact">
            <div class="content">
                <h2>About Us</h2>
                <p>Lanka Trading Enterprise has been giving quality paints and stains to property holders and experts alike for well more than 100 years. <br>
                 Today, Lanka Trading Enterprise line-up of very much regarded private, business and mechanical paint brands offers a wide scope of decisions to meet the changing needs of customers, inside creators, painting contractual workers, property administrators, designers and planners around the world.</p>
            </div>
            <div class = "container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon">
                            <div class="text">
                                <h3>Address</h3>
                                <p>335, Main Street, Negombo</p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <div class="text">
                                <h3>Telephone No.</h3>
                                <p>031-2232260</p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <img src="CSS/phone-icon-telephone-icon-symbol-for-app-and-messenger-vector.jpg" alt="">
                            <div class="text">
                                <h3>Handphone No.</h3>
                                <p>0762704454</p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <div class="text">
                                <h3>Email Address</h3>
                                <p>mohmadbilal004@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contactForm">
                    <form method = "post" action = "AboutUsHandler.php" >
                        <h2>Ask a Question!!</h2>
                        <div class="inputbox">
                            <input type = "text" id = "txtname" name = "txtname" required>
                            <span>Full Name</span>
                        </div>
                        <div class="inputbox">
                            <input type = "text" id = "txtemail" name = "txtemail" required>
                            <span>Email</span>
                        </div>
                        <div class="inputbox">
                            <input type = "text" id = "txtsubject" name = "txtsubject" required>
                            <span>Subject</span>
                        </div>
                        <div class="inputbox">
                            <textarea  name ="txtmessage" id="txtmessage" cols="30" rows="10" required></textarea>
                            <span>Type your Message....</span>
                        </div>
                        <div class="inputbox">
                            <input type = "submit"  id = "submitbtn" name ="submitbtn" value = "Send">
                        </div>
                        
                    </form>
                </div>
                </div>
            </div>
        </section>
       
    </body>
</html>

