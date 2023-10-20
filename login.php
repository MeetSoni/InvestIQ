
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="login.css">
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

    <?php
use Humber\Models\Database;
use Humber\Models\user;

require_once 'models/Database.php';
require_once 'models/user.php';

if(isset($_POST['checkuser'])){
    $email = $_POST['email'];
    $password = $_POST['password'];


    $db = Database::getDb();
    $s = new user();
    $users = $s->checkuser($email,$password, $db);
    var_dump($users);

    if($users){
      
        header("Location: home.html");
     
 
    } 
    else {
        echo '<link rel="stylesheet" type="text/css" href="login.css">';
        echo '
        <style>
        /* Add your CSS styles for the error message box here */
        .error-box {
            background-color: #f44336;
            color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            padding: 20px;
            width: 300px;
            text-align: center;
            margin: 0 auto;
        }
    
        .error-content h2 {
            margin: 0;
            padding: 0;
            font-size: 24px;
        }
    
        .error-content p {
            margin: 10px 0;
            font-size: 16px;
        }
        </style>
        <div class="error-box">
        <div class="error-content">
            <h2>Error Message</h2>
            <p>Oops! Something went wrong. Please try again later.</p>
        </div>
        </div>';
    }
    

 } 


?>

	<div class="login-container">
        <form action="" method="post" class="login-form">
            <h1>Login</h1>
            <div class="input-container">
                <label for="username">Email</label>
                <input type="text" id="email" value=""  name="email" placeholder="Enter your email" required>
            </div>
            <div class="input-container">
                <label for="password">Password</label>
                <input type="password" id="password" value="" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" name="checkuser">Login</button>
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