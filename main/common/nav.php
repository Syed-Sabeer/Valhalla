<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content>
<meta name="keywords" content>

<title>Valhalla - Online Taxi Service HTML5 Template</title>

<link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/magnific-popup.min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/jquery-ui.min.css">
<link rel="stylesheet" href="assets/css/jquery.timepicker.min.css">
<link rel="stylesheet" href="assets/css/nice-select.min.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="home-3">


<header class="header">

<div class="header-top">
<div class="container">
<div class="header-top-wrapper">
<div class="header-top-left">
<div class="header-top-contact">
<ul>
<li><a href="/cdn-cgi/l/email-protection#3f565159507f5a475e524f535a115c5052"><i class="far fa-envelopes"></i>
<span class="__cf_email__" data-cfemail="1b72757d745b7e637a766b777e35787476">[email&#160;protected]</span></a></li>
<li><a href="tel:+21236547898"><i class="far fa-phone-volume"></i> +2 123 654 7898</a>
</li>
<li><a href="#"><i class="far fa-alarm-clock"></i> Sun - Fri (08AM - 10PM)</a></li>
</ul>
</div>
</div>
<div class="header-top-right">
<div class="header-top-link">
<a href="#"><i class="far fa-arrow-right-to-bracket"></i> Login</a>
<a href="../main/register.php"><i class="far fa-user-vneck"></i> Register</a>
</div>
<div class="header-top-social">
<span>Follow Us: </span>
<a href="#"><i class="fab fa-facebook"></i></a>
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="#"><i class="fab fa-instagram"></i></a>
<a href="#"><i class="fab fa-linkedin"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="main-navigation">
<nav class="navbar navbar-expand-lg">
<div class="container position-relative">
<a class="navbar-brand" href="index.php">
<img src="assets/img/logo/logo.png" alt="logo">
</a>
<div class="mobile-menu-right">
<div class="search-btn">
<button type="button" class="nav-right-link"><i class="far fa-search"></i></button>
</div>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
</button>
</div>
<div class="collapse navbar-collapse" id="main_nav">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link active" href="index.php" data-bs-toggle="dropdown">Home</a>

</li>
<li class="nav-item"><a class="nav-link" href="book-ride.php">Booking</a></li>
<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>



<li class="nav-item dropdown">
<a class="nav-link" href="#" data-bs-toggle="dropdown">Blog</a>

</li>
<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
</ul>
<div class="nav-right">
<div class="search-btn">
<button type="button" class="nav-right-link"><i class="far fa-search"></i></button>
</div>
<div class="nav-right-account">
    <div class="dropdown">
    <div data-bs-toggle="dropdown" aria-expanded="false">
    <img src="assets/img/account/user.jpg" alt>
    </div>
    <ul class="dropdown-menu dropdown-menu-end">
        
    <?php 


if (isset($_SESSION['user'])){
    echo '
    <li><a class="dropdown-item" href="dashboard.php"><i class="far fa-gauge-high"></i> Dashboard</a></li>
    <li><a class="dropdown-item" href="profile.php"><i class="far fa-user"></i> My Profile</a></li>
    <li><a class="dropdown-item" href="profile-booking.php"><i class="far fa-layer-group"></i> My Booking</a></li>
    <li><a class="dropdown-item" href="profile-setting.php"><i class="far fa-cog"></i> Settings</a></li>
    <li><a class="dropdown-item" href="#"><i class="far fa-sign-out"></i> Log Out</a></li>
    ';} 
    else{
        echo '
        <li><a class="dropdown-item" href="register.php"><i class="far fa-user-vneck"></i> Register</a></li>
            ';
    }
    ?>
    </ul>
    </div>
    </div>

<div class="nav-right-btn mt-2">
<a href="#" class="theme-btn"><span class="fas fa-taxi"></span>Book A Seat</a>
</div>
<div class="sidebar-btn">
<button type="button" class="nav-right-link"><i class="far fa-bars-filter"></i></button>
</div>
</div>
</div>

<div class="search-area">
<form action="#">
<div class="form-group">
<input type="text" class="form-control" placeholder="Type Keyword...">
<button type="submit" class="search-icon-btn"><i class="far fa-search"></i></button>
</div>
</form>
</div>

</div>
</nav>
</div>
</header>