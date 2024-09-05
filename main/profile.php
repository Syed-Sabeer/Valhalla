<?php 
include("./common/nav.php");
?>

        

<main class="main">

<div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
<div class="container">
<h2 class="breadcrumb-title">My Profile</h2>
<ul class="breadcrumb-menu">
<li><a href="index.php">Home</a></li>
<li class="active">My Profile</li>
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
<p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ddbcb3a9b2b3b49db8a5bcb0adb1b8f3beb2b0">[email&#160;protected]</a></p>
</div>
<ul class="user-profile-sidebar-list">
<li><a href="dashboard.php"><i class="far fa-gauge-high"></i> Dashboard</a></li>
<li><a class="active" href="profile.php"><i class="far fa-user"></i> My Profile</a></li>
<li><a href="profile-booking.php"><i class="far fa-layer-group"></i> My Booking</a></li>
<li><a href="profile-cancel-booking.php"><i class="far fa-xmark-circle"></i> Cancel Booking</a></li>
<li><a href="profile-payment.php"><i class="far fa-credit-card"></i> Payment History</a></li>
<li><a href="profile-setting.php"><i class="far fa-gear"></i> Settings</a></li>
<li><a href="#"><i class="far fa-sign-out"></i> Logout</a></li>
</ul>
</div>
</div>
<div class="col-lg-9">
<div class="user-profile-wrapper">
<div class="row">
<div class="col-lg-7">
<div class="user-profile-card">
<h4 class="user-profile-card-title">Profile Info</h4>
<div class="user-profile-form">
<form action="#">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>First Name</label>
<input type="text" class="form-control" value="Antoni" placeholder="First Name">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Last Name</label>
<input type="text" class="form-control" value="Jonson" placeholder="Last Name">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Email</label>
<input type="text" class="form-control" value="antoni@example.com" placeholder="Email">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Phone</label>
<input type="text" class="form-control" value="+2 134 562 458" placeholder="Phone">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label>Address</label>
<input type="text" class="form-control" value="New York, USA" placeholder="Address">
</div>
</div>
</div>
<button type="button" class="theme-btn my-3"><span class="far fa-user"></span> Save Changes</button>
</form>
</div>
</div>
</div>
<div class="col-lg-5">
<div class="user-profile-card">
<h4 class="user-profile-card-title">Change Password</h4>
<div class="col-lg-12">
<div class="user-profile-form">
<form action="#">
<div class="form-group">
<label>Old Password</label>
<input type="password" class="form-control" placeholder="Old Password">
</div>
<div class="form-group">
<label>New Password</label>
<input type="password" class="form-control" placeholder="New Password">
</div>
<div class="form-group">
<label>Re-Type Password</label>
<input type="password" class="form-control" placeholder="Re-Type Password">
</div>
<button type="button" class="theme-btn my-3"><span class="far fa-key"></span> Change Password</button>
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
</div>

</main>

<?php 
include("./common/footer.php");
?>