<?php 
include("./common/nav.php");
?>

        
        
        
<main class="main">

<div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
<div class="container">
<h2 class="breadcrumb-title">My Booking</h2>
<ul class="breadcrumb-menu">
<li><a href="index.php">Home</a></li>
<li class="active">My Booking</li>
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
<p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="70111e041f1e19301508111d001c155e131f1d">[email&#160;protected]</a></p>
</div>
<ul class="user-profile-sidebar-list">
<li><a href="dashboard.php"><i class="far fa-gauge-high"></i> Dashboard</a></li>
<li><a href="profile.php"><i class="far fa-user"></i> My Profile</a></li>
<li><a class="active" href="profile-booking.php"><i class="far fa-layer-group"></i> My Booking</a></li>
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
<div class="col-lg-12">
<div class="user-profile-card">
<div class="user-profile-card-header">
<h4 class="user-profile-card-title">My Booking</h4>
<div class="user-profile-card-header-right">
<div class="user-profile-search">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search...">
<i class="far fa-search"></i>
</div>
</div>
<a href="#" class="theme-btn"><span class="fas fa-taxi"></span>Book A Seat</a>
</div>
</div>
<div class="table-responsive">
<table class="table text-nowrap">
<thead>
<tr>
<th>Cab Info</th>
<th>Journey Date</th>
<th>Price</th>
<th>Status</th>
<th>Action</th>
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
<td>$650</td>
<td><span class="badge badge-primary">Upcoming</span></td>
<td>
<a href="#" class="btn btn-outline-secondary btn-sm rounded-2" data-bs-toggle="tooltip" title="Details"><i class="far fa-eye"></i></a>
</td>
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
<td>$650</td>
<td><span class="badge badge-danger">Cancel</span></td>
<td>
<a href="#" class="btn btn-outline-secondary btn-sm rounded-2" data-bs-toggle="tooltip" title="Details"><i class="far fa-eye"></i></a>
</td>
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
<td>$650</td>
<td><span class="badge badge-info">Confirmed</span></td>
<td>
<a href="#" class="btn btn-outline-secondary btn-sm rounded-2" data-bs-toggle="tooltip" title="Details"><i class="far fa-eye"></i></a>
</td>
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
<td>$650</td>
<td><span class="badge badge-success">Completed</span></td>
<td>
<a href="#" class="btn btn-outline-secondary btn-sm rounded-2" data-bs-toggle="tooltip" title="Details"><i class="far fa-eye"></i></a>
</td>
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
<td>$650</td>
<td><span class="badge badge-success">Completed</span></td>
<td>
<a href="#" class="btn btn-outline-secondary btn-sm rounded-2" data-bs-toggle="tooltip" title="Details"><i class="far fa-eye"></i></a>
</td>
</tr>
</tbody>
</table>
</div>

<div class="pagination-area">
<div aria-label="Page navigation example">
<ul class="pagination my-3">
<li class="page-item">
<a class="page-link" href="#" aria-label="Previous">
<span aria-hidden="true"><i class="far fa-angle-double-left"></i></span>
</a>
</li>
<li class="page-item active"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item">
<a class="page-link" href="#" aria-label="Next">
<span aria-hidden="true"><i class="far fa-angle-double-right"></i></span>
</a>
</li>
</ul>
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