<?php session_start();
if(!isset($_SESSION["userName"]))
{
	 header('Location:login.php');
}
?>
<!doctype html>
<html>

<head>
  <meta name="description" content="Page Description here" />
  <meta http-equiv="Content-Type" content="text/html" ; charset="utf-8" />
  <meta name="viewpoint" content="width=device-width, initial-scale =1" />

  <link href="CSS/WADCSS.css" type="text/css" rel="stylesheet" />
  <link href="CSS/navigation.css" type="text/css" rel="stylesheet" />
  
  <link href="CSS/ImageStyle.css" type="text/css" rel="stylesheet" />
  <link href="CSS/Footer.css" type="text/css" rel="stylesheet" />

  <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
  <script src="Scripts/Script1.js"></script>
  <script src="Scripts/Script2.js"></script>
  <script src="Scripts/navigation.js"></script>

  <title>Lanka Trading Enterprises</title>
  <style>
.about-box {
    width: 750px;
    height: 760px;
    color: #fff;
    top: 55%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;
    border-radius: 15px;
    padding: 30px 70px;
    align-content: center;
}

.about-box label {
    margin: 0;
    padding: 0;
    font-weight: bold;
    font-size: large;
}

.about-box input {
    width: 50%;
    height: 50%;
    margin-bottom: 1px;
    margin-top: 10px;
}

.about-box textarea {
    width: 50%;
    height: 50%;
    margin-bottom: 1px;
    margin-top: 10px;
}


.about-box input[ type="text"],
textarea {
    border: none;
    border-bottom: 3px solid white;
    background: transparent;
    outline: none;
    height: 40px;
    color: white;
    font-size: 16px;
    margin-bottom: 20px;
}

.about-box input[ type="submit"] {
    border: none;
    outline: none;
    height: 30px;
    width: 160px;
    background: #6e0505;
    color: #fff;
    font-size: 18px;
    border-radius: 5px;
    left: 50%;
}



.about-box input[ type="submit"]:hover {
    cursor: pointer;
    background: #ffc107;
    color: #000;
}


label {
    width: 240px;
    display: inline-block;
}
</style>

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
            <li><a class="index" href="Products.php">All Products</a></li>
            <li><a class="index" href="Decoraticves2.php">Interior And Exterior Decorative</a></li>
            <li><a class="index" href="Sealants2.php">Sealants</a></li>
            <li><a class="index" href="CarCare2.php">Car Care</a></li>
            <li><a class="index" href="WoodCare2.php">Wood Care</a></li>
            <li><a class="index" href="Accessories2.php">Tools And Accessories</a></li>
          </ul>
        </li>

        <li>
          <a class="index" href="#">My Account</a>
          <ul>
            <li><a class="index" href="Login.php">Log In</a></li>
            <li><a class="index" href="registration.php">Create</a></li>
            <li><a class="index" href="Myaccount2.php">My Account</a></li>
            <li><form action="logout.php" method="post"><input class = "logout" type="submit" name = "Submitbtn" value="Log Out"></form></li>
          </ul>
        </li>
        <li> <a class="index" href="ViewCart.php">View Cart Items</a></li>
      </ul>
    </nav>
  </header>
<br><br><br><br>

  <img id="changeImg" class="container img " src="Images/image2.jpg" width="1475" height="500" />

  <table width="100%" class="center" align="center">
    <tbody>
      <tr>
        <td align="center">
          <input class="btn" type="button" id="btn1" name="btn" onclick="pictureChange1()">
          <input class="btn" type="button" id="btn2" name="btn" onclick="pictureChange2()">
          <input class="btn" type="button" id="btn3" name="btn" onclick="pictureChange3()">
          <input class="btn" type="button" id="btn4" name="btn" onclick="pictureChange4()">
          <input class="btn" type="button" id="btn5" name="btn" onclick="pictureChange5()">
          <input class="btn" type="button" id="btn6" name="btn" onclick="pictureChange6()">
        </td>
      </tr>
    </tbody>
  </table>



  <div id="part" class="container img">
    <div class="container1">
      <img src="Images/interior-exterior.jpg" id="pic">
      <p class="paraImg"><b>Decorative Interior And Exterior Paints</b></p>
      <a><button class="btnImg" onclick="location.href= 'Decoraticves2.php'"><b>View Product</b></button> </a>
    </div>
    <div class="container1">
      <img src="Images/Adhesives-and-Sealants.jpg" id="pic">
      <p class="paraImg"><b>Sealants and Adhesives</b></p>
      <a><button class="btnImg" onclick="location.href= 'Sealants2.php'"><b>View Product</b></button></a>
    </div>
    <div class="container1">
      <img src="Images/car Care.jpg" id="pic">
      <p class="paraImg"><b>Auto-Refinish & Car Care</b></p>
      <a><button class="btnImg" onclick="location.href= 'CarCare2.php'"><b>View Product</b></button></a>
    </div>
    <div class="container1">
      <img src="Images/WoodFinish.jpg" id="pic">
      <p class="paraImg"><b>Wood Care</b></p>
      <a><button class="btnImg" onclick="location.href= 'WoodCare2.php'"><b>View Product</b></button></a>
    </div>
    <div class="container1">
      <img src="Images/Accessories .jpg" id="pic">
      <p class="paraImg"><b>Tools And Accessories</b></p>
      <a><button class="btnImg" onclick="location.href= 'Accessories2.php'"><b>View Product</b></button></a>
    </div>
  </div>

  <br><br><br><br><br>
  <div align="center">
    <table>
      <tbody>
        <tr width="100%">
          <td class="cotent-Table" align="center">
            <h3>Discover Our Difference</h3>
            <h4>We're agents of continuous change and innovation. We strive to accomplish our goals and perform to the
              most of our ability.<br>
              We have 2 decades of reliability in the community for our commitment to quality.<br>
              You will become happy with our services.</h4>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <br><br><br><br>
  <table width="100%" style="border: none; padding: none;">
    <tbody style="border: none; padding: none;">
      <tr style="border: none; padding: none;">
        <div class="container3 ">
          <td class="container3" style="border: none; padding: none;"><img class="part" src="Images/Background.jpg"
              id="pic"></img>
              
            <h1 class="paraImg2">Conatct Us</h1><br>
            <div class = "about-box">
            <form method = "post" action = "AboutUsHandler.php" >
                           <label>Full Name</label>
                            <input type = "text" id = "txtname" name = "txtname" required>
                          <label>Email</label>
                            <input type = "text" id = "txtemail" name = "txtemail" required>
                        <label>Subject</label>
                            <input type = "text" id = "txtsubject" name = "txtsubject" required>
                        <label>Type your Message....</label>
                            <textarea  name ="txtmessage" id="txtmessage" cols="30" rows="10" required></textarea><br><br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type = "submit"  id = "submitbtn" name ="submitbtn" value = "Send">   
                    </form>
              </div>
        </div>
        </td>
        <td width=800px>
          <div id="part" class="container2">
            <img src="Images/ChhosePaint.jpg" id="pic">
            <img src="Images/Painter.jpg" id="pic">
            <img src="Images/Parrot.jpg" id="pic">
            <img src="Images/KIdPaint.jpg" id="pic">
          </div>
        </td>
      </tr>
    </tbody>
  </table>

<div class="footer-container">
  <div class="footer">
    <div class="footer-heading footer-1">
      <h2>About Us</h2>
     <p>Lanka Trading Enterprise for all your embellishing needs enormous or little. <br>Just as items from all the main brands we offer free conveyance, <br>shading coordinating, snap and gather just as available master guidance from our store groups.</p>
    </div>
    <div class="footer-heading footer-1">
      <h2>Contact Us</h2>
      <a href="#">Jobs</a>
      <a href="#">Supports</a>
      <a href="AboutUS.php">Contact</a>
      <a href="#">Sponserships</a>
    </div>
    <div class="footer-heading footer-3">
      <h2>Social Media</h2>
      <a href="#">Instagram</a>
      <a href="#">Facebook</a>
      <a href="#">Youtube</a>
      <a href="#">Twitter</a>
    </div>
    <div class="footer-email-form">
      <h2>Join our stores</h2>
      <a><input type="submit" id="footer-email-btn" onclick="location.href= 'Login.php'" value = "Join"></a>
    </div>
    
  </div>
  
</div>
<div class="footer-bottom">
      <p>All right reserved by LankaTradingEnterprise&copy; 2022</p>
    </div>
</body>

</html>