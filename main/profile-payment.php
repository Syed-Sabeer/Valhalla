<?php 
include("./common/nav.php");
?>

        

<main class="main">

<div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
<div class="container">
<h2 class="breadcrumb-title">Payment History</h2>
<ul class="breadcrumb-menu">
<li><a href="index.php">Home</a></li>
<li class="active">Payment History</li>
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
<p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3e5f504a5150577e5b465f534e525b105d5153">[email&#160;protected]</a></p>
</div>
<ul class="user-profile-sidebar-list">
<li><a href="dashboard.php"><i class="far fa-gauge-high"></i> Dashboard</a></li>
<li><a href="profile.php"><i class="far fa-user"></i> My Profile</a></li>
<li><a href="profile-booking.php"><i class="far fa-layer-group"></i> My Booking</a></li>
<li><a href="profile-cancel-booking.php"><i class="far fa-xmark-circle"></i> Cancel Booking</a></li>
<li><a class="active" href="profile-payment.php"><i class="far fa-credit-card"></i> Payment History</a></li>
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
<h4 class="user-profile-card-title">Payment History</h4>
<div class="user-profile-card-header-right">
<div class="user-profile-search">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search...">
<i class="far fa-search"></i>
</div>
</div>
</div>
</div>
<div class="table-responsive">
<table class="table text-nowrap">
<thead>
<tr>
<th>Booking ID</th>
<th>Booking Date</th>
<th>Price</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<tr>
<th>
#123456
</th>
<td>
24/02/2023
</td>
<td>$650</td>
<td><span class="badge badge-success">Paid</span></td>
</tr>
<tr>
<th>
#123456
</th>
<td>
24/02/2023
</td>
<td>$650</td>
<td><span class="badge badge-danger">Pending</span></td>
</tr>
<tr>
<th>
#123456
</th>
<td>
24/02/2023
</td>
<td>$650</td>
<td><span class="badge badge-success">Paid</span></td>
</tr>
<tr>
<th>
#123456
</th>
<td>
24/02/2023
</td>
<td>$650</td>
<td><span class="badge badge-success">Paid</span></td>
</tr>
<tr>
<th>
#123456
</th>
<td>
24/02/2023
</td>
<td>$650</td>
<td><span class="badge badge-success">Paid</span></td>
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