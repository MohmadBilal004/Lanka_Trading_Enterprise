<html>
    <head>
        <title>Login form</title>
        <link href="CSS/login.css" type="text/css" rel="stylesheet" />
        <link href="CSS/navigation.css" type="text/css" rel="stylesheet" />

        <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
        <script src="Scripts/navigation.js"></script>
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
      <li><a class="index">Stores</a>
        <ul>
          <li><a class="index" href="Store.php">All Products</a></li>
          <li><a class="index" href="Decoratives.php">Interior And Exterior Decorative</a></li>
          <li><a class="index" href="Sealants.php">Sealants</a></li>
          <li><a class="index" href="CarCare.php">Car Care</a></li>
          <li><a class="index" href="WoodCare.php">Wood Care</a></li>
          <li><a class="index" href="Accessories.php">Tools And Accessories</a></li>
        </ul>
      </li>

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
          
            <div class = "loginbox">
                <img src = "Images/Avatar.jpg" class = "Avatar">
                <h1>Customer Login</h1>
                <form method = "post" action = "LoginHandler.php">
                    <p>User Name </p>
                    <input type = "text" id = "txtEmail" name = "txtEmail" placeholder="Enter Email">
                    <p>Password</p>
                    <input type = "password" id = "txtPassword" name = "txtPassword" placeholder="Enter Password">
                    <input type = "submit" name = "Submitbtn" id = "Submitbtn" value = "Login">
                    <a href = "#"><p>Lost Your Password?</p></a><br>
                    <h4 align = "center">If you are a new Customer</h4>
                    <a href = "registration.php"><p>Create an account.</p></a>
                </form>

            </div>

        </body>
</html>