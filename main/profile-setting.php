<?php 
include("./common/nav.php");
?>

        

<main class="main">

<div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
<div class="container">
<h2 class="breadcrumb-title">Settings</h2>
<ul class="breadcrumb-menu">
<li><a href="index.php">Home</a></li>
<li class="active">Settings</li>
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
<p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="54353a203b3a3d14312c35392438317a373b39">[email&#160;protected]</a></p>
</div>
<ul class="user-profile-sidebar-list">
<li><a href="dashboard.php"><i class="far fa-gauge-high"></i> Dashboard</a></li>
<li><a href="profile.php"><i class="far fa-user"></i> My Profile</a></li>
<li><a href="profile-booking.php"><i class="far fa-layer-group"></i> My Booking</a></li>
<li><a href="profile-cancel-booking.php"><i class="far fa-xmark-circle"></i> Cancel Booking</a></li>
<li><a href="profile-payment.php"><i class="far fa-credit-card"></i> Payment History</a></li>
<li><a class="active" href="profile-setting.php"><i class="far fa-gear"></i> Settings</a></li>
<li><a href="#"><i class="far fa-sign-out"></i> Logout</a></li>
</ul>
</div>
</div>
<div class="col-lg-9">
<div class="user-profile-wrapper">
<div class="user-profile-card profile-setting">
<h4 class="user-profile-card-title">Settings</h4>
<div class="row">
<div class="col-lg-6">
<h6 class="mb-3">Privacy Setting</h6>
<div class="profile-privacy-setting">
<form action="#">
<div class="form-check form-switch">
<input class="form-check-input" name="privacy-setting" value="1" type="checkbox" role="switch" id="privacy-setting-1" checked>
<label class="form-check-label" for="privacy-setting-1">Notify Me When Booking Confirm</label>
</div>
<div class="form-check form-switch">
<input class="form-check-input" name="privacy-setting" value="2" type="checkbox" role="switch" id="privacy-setting-2">
<label class="form-check-label" for="privacy-setting-2">I Want To Receive Email Notify</label>
</div>
<div class="form-check form-switch">
<input class="form-check-input" name="privacy-setting" value="3" type="checkbox" role="switch" id="privacy-setting-3" checked>
<label class="form-check-label" for="privacy-setting-3">Hide My Phone Number From Public</label>
</div>
<div class="form-check form-switch">
<input class="form-check-input" name="privacy-setting" value="4" type="checkbox" role="switch" id="privacy-setting-4">
<label class="form-check-label" for="privacy-setting-4">Notify Me When Booking Completed</label>
</div>
<div class="form-check form-switch">
<input class="form-check-input" name="privacy-setting" value="5" type="checkbox" role="switch" id="privacy-setting-5" checked>
<label class="form-check-label" for="privacy-setting-5">Make My Profile Private</label>
</div>
<div class="my-4">
<button type="submit" class="theme-btn"><span class="far fa-gear"></span>Update Settings</button>
</div>
</form>
</div>
</div>
<div class="col-lg-6">
<h6 class="mb-3">Delete Account</h6>
<div class="user-profile-form">
<form action="#">
<div class="form-group">
<select class="select mb-4">
<option value>Choose Reason</option>
<option value="1">Reason One</option>
<option value="2">Reason Two</option>
<option value="3">Reason Three</option>
</select>
</div>
<div class="form-group">
<textarea class="form-control" cols="30" rows="4" placeholder="Describe Your Reason"></textarea>
</div>
<div class="my-4">
<button type="submit" class="theme-btn"><span class="far fa-trash-can"></span>Delete Account</button>
</div>
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