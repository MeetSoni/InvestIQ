<?php 
use Humber\Models\Database;
use Humber\Models\user;

require_once 'models/Database.php';
require_once 'models/user.php';

if(isset($_POST['addNewUser'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $db = Database::getDb();
    $s = new user();
    $c = $s->addUser( $fname,  $lname, $email,$password, $db);


    if($c){
      
        header("Location: home.html");
     
 
    } else {
        echo "problem adding a student";
    }

 }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signUp.css">
    <title>Sign Up</title>
    <link rel="stylesheet" href="header.css">
    <script src="header.js"></script>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>
<body>
    <div class="main_nav">
        <div class="logo-box">
            <img src="logo.jpg" alt="">
        </div>
        <div class="topnav" id="myTopnav">
            <a href="#home" class="active">Home</a>
            <a href="news.html">News</a>
            <a href="contacts.html">Contact</a>
            <a href="about.html">About</a>
            <a href="#trading">Trading</a>
            <a href="#watchlist">Watchlist</a>
            <a href="price.html">Pricing</a>
            <a href="MutualFunds.html">MutualFunds</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i>
            </a>
          </div>
    </div>

    <div class="container">
        <h2>Sign Up</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="fname">Username:</label>
                <input type="text" id="username" name="fname" value="" placeholder="Enter your firstname" required>
            </div>
            <div class="form-group">
                <label for="lname">Username:</label>
                <input type="text" id="username" name="lname" value="" placeholder="Enter your lastname" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value=""placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <button type="submit" name="addNewUser">Sign Up</button>
            </div>
        </form>
    </div>

    <div class="footer-box">
        <div class="footer-socialmedia-icon">
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-linkedin"></i>
            <i class="fa-brands fa-twitter"></i>
        </div>
        <div class="footer-info">
            <p>&#169; Copywrite 2023 investIQ</p>
        </div>
    </div>
</body>
</html>
