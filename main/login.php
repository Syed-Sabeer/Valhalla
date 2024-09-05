<?php 


// Start session at the beginning of the script
session_start();

include("../utilities/connection.php");

$error_message = ""; // Initialize the error message

if (isset($_POST["btn"])) {
    $Email2 = $_POST["email2"];
    $Pass2 = $_POST["password2"];

    // Using prepared statements to prevent SQL injection
    $signin = "SELECT * FROM `users` WHERE email = ? AND password = ?";
    $stmt = mysqli_prepare($con, $signin);
    mysqli_stmt_bind_param($stmt, "ss", $Email2, $Pass2);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $num = mysqli_num_rows($result);

    if ($num != 0) {
        $array = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $array['firstname'];
        
        header("location:index.php");
        exit();
    } else if ($Email2 == 'admin@gmail.com' && $Pass2 == 'admin') {
        header("location:../admin/signin.php");
        exit();
    } else {
        $error_message = "Username or Password is Incorrect";
    }
}



include("./common/nav.php");
?>

        
        

<div class="sidebar-popup">
<div class="sidebar-wrapper">
<div class="sidebar-content">
<button type="button" class="close-sidebar-popup"><i class="far fa-xmark"></i></button>
<div class="sidebar-logo">
<img src="assets/img/logo/logo.png" alt>
</div>
<div class="sidebar-about">
<h4>About Us</h4>
<p>There are many variations of passages available sure there majority have suffered alteration in
some form by injected humour or randomised words which don't look even slightly believable.</p>
</div>
<div class="sidebar-contact">
<h4>Contact Info</h4>
<ul>
<li>
<h6>Email</h6>
<a href="/cdn-cgi/l/email-protection#f990979f96b99c81989489959cd79a9694"><i class="far fa-envelope"></i><span class="__cf_email__" data-cfemail="056c6b636a45607d64687569602b666a68">[email&#160;protected]</span></a>
</li>
<li>
<h6>Phone</h6>
<a href="tel:+21236547898"><i class="far fa-phone"></i>+2 123 654 7898</a>
</li>
<li>
<h6>Address</h6>
<a href="#"><i class="far fa-location-dot"></i>25/B Milford Road, New York</a>
</li>
</ul>
</div>
<div class="sidebar-social">
<h4>Follow Us</h4>
<a href="#"><i class="fab fa-facebook"></i></a>
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="#"><i class="fab fa-instagram"></i></a>
<a href="#"><i class="fab fa-linkedin"></i></a>
</div>
</div>
</div>
</div>

<main class="main">

<div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
<div class="container">
<h2 class="breadcrumb-title">Login</h2>
<ul class="breadcrumb-menu">
<li><a href="index.php">Home</a></li>
<li class="active">Login</li>
</ul>
</div>
</div>


<div class="login-area py-120">
<div class="container">
<div class="col-md-5 mx-auto">
<div class="login-form">
<div class="login-header">
<img src="assets/img/logo/logo.png" alt>
<p>Login with your Valhalla account</p>
</div>
<form method="post">
<div class="form-group">
<label>Email Address</label>
<input type="email" class="form-control" placeholder="Your Email" name="email2">
</div>
<div class="form-group">
<label>Password</label>
<input type="password" class="form-control" placeholder="Your Password" name="password2">
</div>
<div class="d-flex justify-content-between mb-4">
<!-- <div class="form-check">
<input class="form-check-input" type="checkbox" value id="remember">
<label class="form-check-label" for="remember">
Remember Me
</label>
</div> -->
<a href="forgot-password.php" class="forgot-pass">Forgot Password?</a>
</div>
<div class="d-flex align-items-center">
<button type="submit" class="theme-btn" name="btn"><i class="far fa-sign-in"></i> Login</button>
</div>
</form>
<br>
<p class="error-message " style="color: red; font-weight: bold;" ><?php echo isset($error_message) ? $error_message : ""; ?></p>

<div class="login-footer">
<p>Don't have an account? <a href="register.php">Register.</a></p>

</div>
</div>
</div>
</div>
</div>

</main>

<?php 
include("./common/footer.php");
?>