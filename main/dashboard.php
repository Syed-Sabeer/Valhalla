<?php 
include("./common/nav.php");
?>


<main class="main">

<div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
<div class="container">
<h2 class="breadcrumb-title">Dashboard</h2>
<ul class="breadcrumb-menu">
<li><a href="index.php">Home</a></li>
<li class="active">Dashboard</li>
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
<p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3c5d52485352557c59445d514c5059125f5351">[email&#160;protected]</a></p>
</div>
<ul class="user-profile-sidebar-list">
<li><a class="active" href="dashboard.php"><i class="far fa-gauge-high"></i> Dashboard</a></li>
<li><a href="profile.php"><i class="far fa-user"></i> My Profile</a></li>
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
<div class="col-md-6 col-lg-4">
<div class="dashboard-widget dashboard-widget-color-1">
<div class="dashboard-widget-info">
<h1>05</h1>
<span>Upcoming Booking</span>
</div>
<div class="dashboard-widget-icon">
<i class="fal fa-list"></i>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="dashboard-widget dashboard-widget-color-2">
<div class="dashboard-widget-info">
<h1>1250</h1>
<span>Total Booking</span>
</div>
<div class="dashboard-widget-icon">
<i class="fal fa-eye"></i>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="dashboard-widget dashboard-widget-color-3">
<div class="dashboard-widget-info">
<h1>110</h1>
<span>Cancel Booking</span>
</div>
<div class="dashboard-widget-icon">
<i class="fal fa-xmark-circle"></i>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="user-profile-card">
<h4 class="user-profile-card-title">Upcoming Booking</h4>
<div class="table-responsive">
<table class="table text-nowrap">
<thead>
<tr>
<th>Cab Info</th>
<th>Journey Date</th>
<th>Drop Off Location</th>
<th>Price</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="table-list-info">
<a href="#">
<img src="assets/img/taxi/01.png" alt>
<div class="table-list-content">
<h6>Mercedes Benz</h6>
<span>Booking ID: #123456</span>
</div>
</a>
</div>
</td>
<td>
<span>24 February, 2023</span>
<p>03:15 PM</p>
</td>
<td>
77 Sunshine Strip, Harlingen
</td>
<td>$650</td>
<td><span class="badge badge-primary">Upcoming</span></td>
</tr>
<tr>
<td>
<div class="table-list-info">
<a href="#">
<img src="assets/img/taxi/01.png" alt>
<div class="table-list-content">
<h6>Mercedes Benz</h6>
<span>Booking ID: #123456</span>
</div>
</a>
</div>
</td>
<td>
<span>24 February, 2023</span>
<p>03:15 PM</p>
</td>
<td>
77 Sunshine Strip, Harlingen
</td>
<td>$650</td>
<td><span class="badge badge-primary">Upcoming</span></td>
</tr>
<tr>
<td>
<div class="table-list-info">
<a href="#">
<img src="assets/img/taxi/01.png" alt>
<div class="table-list-content">
<h6>Mercedes Benz </h6>
<span>Booking ID: #123456</span>
</div>
</a>
</div>
</td>
<td>
<span>24 February, 2023</span>
<p>03:15 PM</p>
</td>
<td>
77 Sunshine Strip, Harlingen
</td>
<td>$650</td>
<td><span class="badge badge-primary">Upcoming</span></td>
</tr>
<tr>
<td>
<div class="table-list-info">
<a href="#">
<img src="assets/img/taxi/01.png" alt>
<div class="table-list-content">
<h6>Mercedes Benz</h6>
<span>Booking ID: #123456</span>
</div>
</a>
</div>
</td>
<td>
<span>24 February, 2023</span>
<p>03:15 PM</p>
</td>
<td>
77 Sunshine Strip, Harlingen
</td>
<td>$650</td>
<td><span class="badge badge-primary">Upcoming</span></td>
</tr>
<tr>
<td>
<div class="table-list-info">
<a href="#">
<img src="assets/img/taxi/01.png" alt>
<div class="table-list-content">
<h6>Mercedes Benz</h6>
<span>Booking ID: #123456</span>
</div>
</a>
</div>
</td>
<td>
<span>24 February, 2023</span>
<p>03:15 PM</p>
</td>
<td>
77 Sunshine Strip, Harlingen
</td>
<td>$650</td>
<td><span class="badge badge-primary">Upcoming</span></td>
</tr>
</tbody>
</table>
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