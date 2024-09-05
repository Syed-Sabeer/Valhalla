<?php 
include("./common/nav.php");
?>

        

<main class="main">

<div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
<div class="container">
<h2 class="breadcrumb-title">Cancel Booking</h2>
<ul class="breadcrumb-menu">
<li><a href="index.php">Home</a></li>
<li class="active">Cancel Booking</li>
</ul>
</div>
</div>


<div class="user-profile py-120">
<div class="container">
<div class="row">
<div class="col-lg-3">
<div class="user-profile-sidebar">
<div class="user-profile-sidebar-top">
<div class="user-profile-img">
<img src="assets/img/account/user.jpg" alt>
<button type="button" class="profile-img-btn"><i class="far fa-camera"></i></button>
<input type="file" class="profile-img-file">
</div>
<h5>Antoni Jonson</h5>
<p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0f6e617b6061664f6a776e627f636a216c6062">[email&#160;protected]</a></p>
</div>
<ul class="user-profile-sidebar-list">
<li><a href="dashboard.php"><i class="far fa-gauge-high"></i> Dashboard</a></li>
<li><a href="profile.php"><i class="far fa-user"></i> My Profile</a></li>
<li><a href="profile-booking.php"><i class="far fa-layer-group"></i> My Booking</a></li>
<li><a class="active" href="profile-cancel-booking.php"><i class="far fa-xmark-circle"></i> Cancel Booking</a></li>
<li><a href="profile-payment.php"><i class="far fa-credit-card"></i> Payment History</a></li>
<li><a href="profile-setting.php"><i class="far fa-gear"></i> Settings</a></li>
<li><a href="#"><i class="far fa-sign-out"></i> Logout</a></li>
</ul>
</div>
</div>
<div class="col-lg-9">
<div class="user-profile-wrapper">
<div class="row">
<div class="col-lg-12">
<div class="user-profile-card">
<h4 class="user-profile-card-title">Cancel Booking</h4>
<div class="user-profile-form">
<form action="#">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Booking Id</label>
<input type="text" class="form-control" placeholder="Enter Booking Id">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Reason For Cancellation</label>
<select class="select">
<option value>Choose Reason</option>
<option value="1">Low Rider Score</option>
<option value="2">Personal Issues</option>
<option value="3">Others</option>
</select>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label>Your Comment</label>
<textarea class="form-control" rows="3" placeholder="Write Comment"></textarea>
</div>
</div>
</div>
<button type="button" class="theme-btn my-3"><span class="far fa-xmark-circle"></span> Cancel Booking</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</main>

<?php 
include("./common/footer.php");
?>