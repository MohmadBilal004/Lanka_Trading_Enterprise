<html>
    <head>
        <title>Sign In</title>
        <link href="CSS/signin.css" type="text/css" rel="stylesheet" />
        <link href="CSS/navigation.css" type="text/css" rel="stylesheet" />

        <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
        <script src="Scripts/Confirm.js"></script>
        <script src="Scripts/navigation.js"></script>


        </head>
    </head>
    <body>

    <script>  
        function validate2(){
          var upassword = document.getElementById("txtPassword").value;
          var cpassword = document.getElementById("txtPass").value;
          var bool;
          if(upassword != cpassword){
          alert("Please confirm the Password");
         
    }
}

        </script>
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
          <li><form action="logout.php" method="post"><input class = "logout" type="submit" name = "Submitbtn" value="Log Out"></form></li>
        </ul>
      </li>
    
    </ul>
  </nav>
</header>
        <div class = "signinbox">
            <img src = "Images/Avatar.jpg" class = "Avatar">
            <h1>Customer Registration</h1>
            <form  method = "post" action = "RegistrationHandler.php" >
                <p>First Name</p>
                <input type = "text" id = "txtFname" name = "txtFname" placeholder="Enter Username">
                <p>Last Name</p>
                <input type = "text" id = "txtLname" name = "txtLname" placeholder="Enter Username">
                <p>Email</p>
                <input type = "text" id = "txtEmail" name = "txtEmail" placeholder="Enter your Email">
                <p>Contact Number</p>
                <input type = "number" id = "txtNumber" name = "txtNumber" placeholder="Enter Contact Number">
                <p>Password</p>
                <input type = "password" id = "txtPassword" name = "txtPassword" placeholder="Enter Password">
                <p>Confirm Password</p>
                <input type = "password" id = "txtPass" name = "txtPass" placeholder="Enter Password" onkeyup="validate1()">
                <span id = "ed" style = "color:red"></span>

                <input type = "submit" name = "Submitbtn" id = "Submitbtn" value = "Create Account" onclick="validate2()">
                <h4 align = "center">If you have an account already</h4>
                    <a href = "Login.php"><p>Login to the account</p></a>
            </form>
        </div>
        
    </body>
</html>