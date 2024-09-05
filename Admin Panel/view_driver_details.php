<?php 
include("./common/nav.php");
include("./common/sidebar.php");
include("../utilities/connection.php");
?>
<style>
    span{
        font-weight: bold;
    }
</style>
<div class="contents">
<div class="blog-page2">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="breadcrumb-main">
<h4 class="text-capitalize breadcrumb-title">Blog Details</h4>
<div class="breadcrumb-action justify-content-center flex-wrap">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Dashboard</a></li>
<li class="breadcrumb-item"><a href="#">Pages</a></li>
<li class="breadcrumb-item active" aria-current="page">Blog Details</li>
</ol>
</nav>
</div>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-lg-8 col-12">
<div class="blog-details-thumbnail">

</div>

<?php 
if (isset($_GET['id'])) {
    $driverId = $_GET['id'];

    // Retrieve driver details from pending_driver_details
    $selectQuery = "SELECT * FROM pending_driver_details WHERE id = ?";
    $stmt = $con->prepare($selectQuery);
    $stmt->bind_param("i", $driverId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo '
        <img src="../Images/Driver/profile/' . $row['driver_pic'] . '" alt>
        <h1 class="mt-5">Driver Details</h1>
<!-- Driver Details -->
<article class="blog-details">
<div class="blog-details-content">
<h2 class="main-title mb-30">' . $row['full_name'] . '</h2>

<div class="blog-body">
<p class="mb-20"><span>Phone: </span>' . $row['phone'] . ' </p>
<p class="mb-20"><span>Address: </span>' . $row['address'] . ' </p>
<p class="mb-20"><span>Post Code: </span>' . $row['post_code'] . ' </p>
<p class="mb-20"><span>Driving License no: </span>' . $row['driving_license_no'] . ' </p>
<p class="mb-20"><span>CNIC no: </span>' . $row['cnic'] . ' </p>

<div class="d-flex col-12">
<p class="mb-20 col-4"><span>CNIC Front:<br> </span>     <img src="../Images/Driver/cnic/front/' . $row['cnic_front_pic'] . '" alt></p>
<p class="mb-20 col-4"></p>
<p class="mb-20 col-4"><span>CNIC Back:<br> </span>     <img src="../Images/Driver/cnic/back/' . $row['cnic_back_pic'] . '" alt></p>
</div>

<p class="mb-20 col-4"><span>Driving License:<br> </span>     <img src="../Images/Driver/driving_license/' . $row['driving_license_pic'] . '" alt></p>


</div>


</div>

</article>
';

$selectVehicleQuery = "SELECT * FROM pending_vehicle_details WHERE driver_id = ?";
$stmtSelectVehicle = $con->prepare($selectVehicleQuery);
$stmtSelectVehicle->bind_param("i", $row['driver_id']);
$stmtSelectVehicle->execute();
$resultVehicle = $stmtSelectVehicle->get_result();

if ($resultVehicle->num_rows > 0) {
    $rowVehicle = $resultVehicle->fetch_assoc();
    echo '
<!-- Vehicle Details -->
<h1 class="mt-5">Vehicle Details</h1>
<article class="blog-details">
<div class="blog-details-content">
<div class="blog-body">
<p class="mb-20"><span>Vehicle Name: </span>' . $rowVehicle['name'] . ' </p>
<p class="mb-20"><span>Model: </span>' . $rowVehicle['model'] . ' </p>
<p class="mb-20"><span>Make: </span>' . $rowVehicle['make'] . ' </p>
<p class="mb-20"><span>Registration: </span>' . $rowVehicle['registration'] . ' </p>
<p class="mb-20"><span>Number: </span>' . $rowVehicle['number'] . ' </p>
<p class="mb-20"><span>Color: </span>' . $rowVehicle['color'] . ' </p>
<p class="mb-20"><span>Seating Capacity: </span>' . $rowVehicle['seating_capacity'] . ' </p>

<div class="d-flex col-12">
<p class="mb-20 col-4"><span>Car Front:<br> </span>     <img src="../Images/Vehicle/Front/' . $rowVehicle['front_pic'] . '" alt></p>
<p class="mb-20 col-4"></p>
<p class="mb-20 col-4"><span>Car Back:<br> </span>     <img src="../Images/Vehicle/Back/' . $rowVehicle['back_pic'] . '" alt></p>
</div>




</div>


</div>

</article>

';

}
else {
    echo '<p>No pending vehicle details found for the driver.</p>';
}

$stmtSelectVehicle->close();
} else {
echo '<p>No pending driver details found for the given ID.</p>';
}

$stmt->close();
$con->close();
} else {
echo '<p>Driver ID not provided.</p>';
}
?>






</div>
</div>

</div>
</div>
</div>

<?php 
include("./common/footer.php");
?>