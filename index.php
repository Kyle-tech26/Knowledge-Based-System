<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
        function preventBack(){window.history.forward()};
        setTimeout("preventBack()",);
        window.onunload=function(){null;}
        </script>



    <title>Register & Login</title>
</head>
<body>
 <div class="designtop">
 <nav class="navbar">
        <div class="containerr">
            <a href="homepage.php" class="navbar-brand">
                <img src="img/logoo.png" alt="Logo" class="navbar-logo"> <!-- Insert your logo file path here -->
                Enchanted Luzon Getaways
            </a>
            
        </div>
    </nav>

   
                       <style>

/* Reset some browser default styles */


.navbar-logo{
    width: 70px;
    position: relative;
    top: 15px;
    left: 20px;
}


/* Navbar styling */
.navbar {
    background-color: #86B817;
    padding: 10px 10px;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
}

.navbar .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar-brand {
    color: white;
    font-size: 24px;
    text-decoration: none;
}

.containerr{
    position: relative;
    top: -20px;
    left: 100px;
}

</style>

 </div>


    <div class="container" id="signUp" style="display:none;">
    <h1 class="form-title">Register</h1>
    <form method="post" action="register.php">
       
        <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="fname" id="fname" placeholder="First Name" required>
        <label for="fname">First Name</label>
    </div>
        <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="lname" id="lname" placeholder="Last Name" required>
        <label for="lname">Last Name</label>
    </div>
        <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="email">Email</label>
    </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="passwords" required>
            <label for="passwords">Password</label>
        </div>
        <input type="submit" class="btn" value="Sign Up" name="signUp">
    </form>
   
    <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button> 
        <!--tatawagin -->
    </div>
</div>
    
<div class="container" id="signIn">
    <h1 class="form-title">Sign In</h1>
    <form method="post" action="register.php">
        
    <div class="input-group">
    <h3>Email</h3>
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
       
        </div>
        <div class="input-group">
            <h3>Password</h3>
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="password" required>
           
        </div>
        
        <input type="submit" class="btn" value="Sign In" name="signIn">
    </form>
   
    <div class="links">
        <p>Don't have account yet?</p>
        <button id="signUpButton">Sign Up</button>
        <!--tatawagin -->
    </div>
</div>







<script src="script.js"></script>

</body>
</html>