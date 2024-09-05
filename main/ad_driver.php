<?php
include("./common/nav.php");
include("../utilities/connection.php");


        ?>
<div class="booking-area  mt-5">
<div class="container">
<div class="booking-form">
<h4 class="booking-title">Book Your Ride</h4>
<form action="#">
<div class="row">
<div class="col-lg-5">
<div class="form-group">
<label>From</label>
<input type="text" class="form-control" placeholder="Search Location">
<i class="far fa-location-dot"></i>
</div>
</div>
<div class="col-lg-5">
<div class="form-group">
<label>To</label>
<input type="text" class="form-control" placeholder="Search Location">
<i class="far fa-location-dot"></i>
</div>
</div>

<div class="col-lg-2 align-self-end">
<button class="theme-btn"  type="submit">Search<i class="fas fa-arrow-right"></i></button>
</div>
</div>
</form>
</div>
</div>
</div>
<?php 
// Fetch driver ad details from the database (assuming you have a table named driver_ad)
$query = "SELECT * FROM driver_ad";
$result = mysqli_query($con, $query);

// Check if there are rows in the result set
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Extract data from the row
        $driverId = $row['driver_id'];
        $locationFrom = $row['location_from'];
        $locationTo = $row['location_to'];
        $date = $row['date'];
        $time = $row['time'];
        $pickup = $row['pickup'];
        $dropoff = $row['dropoff'];
        $seats = $row['seats'];
        $pricePerSeat = $row['price_per_seat'];
        $description = $row['description'];
        $smokingPreference = $row['smoking'];
        $luggagePreference = $row['luggage'];

        // Fetch driver details from the driver_details table based on driver_id
        $driverDetailsQuery = "SELECT full_name, driver_pic FROM driver_details WHERE driver_id = '$driverId'";
        $driverVehicleQuery = "SELECT front_pic FROM vehicle_details WHERE driver_id = '$driverId'";
        $driverVehicleResult = mysqli_query($con, $driverVehicleQuery);
        $driverDetailsResult = mysqli_query($con, $driverDetailsQuery);

        if ($driverDetailsResult && mysqli_num_rows($driverDetailsResult) && $driverVehicleResult && mysqli_num_rows($driverVehicleResult) > 0) {
            $driverDetails = mysqli_fetch_assoc($driverDetailsResult);
            $VehicleDetails = mysqli_fetch_assoc($driverVehicleResult);
            $driverName = $driverDetails['full_name'];
            $driverImage = $driverDetails['driver_pic'];
            $vehicle_front = $VehicleDetails['front_pic'];
        } else {
            // Handle the case where driver details are not found
            $driverName = "Unknown";
            $driverImage = "default_image.jpg"; // Provide a default image name or URL
        }
    
        // Display the driver ad details dynamically in the loop
?>

<div class="booking-area mt-5 mb-5">
            <div class="container">
                <div class="booking-form">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <img src="../Images/Driver/profile/<?php echo $driverImage; ?>" alt="Driver Image" style="border-radius: 100%; width: 37%; height:100%;">
                                    <h6 class="mt-2"><?php echo $driverName; ?></h6>
                                    <h6 class="mt-2"><?php echo 5.3; ?> . <span style="color: rgb(65, 64, 64); font-size:15px;"><?php echo 60; ?> driven</span></h6>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <h4 style="color: cadetblue;"><?php echo $locationFrom; ?> to <?php echo $locationTo; ?></h4>
                                    <p style="color: black; font-weight: bold;">Leaving <?php echo $date; ?> at <?php echo $time; ?></p>
                                    <br>
                                    <p style="font-size: 13px;"><span>Pickup: &nbsp;&nbsp;&nbsp;</span><?php echo $pickup; ?></p>
                                    <p style="font-size: 13px;"><span>Dropoff:&nbsp;&nbsp;</span><?php echo $dropoff; ?></p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                <img src="../Images/Vehicle/Front/<?php echo $vehicle_front ?>" alt="" style="width: min-content !important;" >
                                <p style="font-size:15px;">Bentley Continental</p>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <!-- Add the rest of the dynamic data... -->
                                    <h5>6 Seats Left</h5>
<h5 style="color:#05AC09;" class="mt-2">$ <?php echo  $pricePerSeat ?></h5>
<p>Per Seat</p>
                                    <article class="d-flex mt-3">
                                        <?php
                                        if ($smokingPreference == 'smoking') {
                                            echo '<img src="../Dashboard/assets/img/preferences/smoking.png" alt="" style="border-radius:100%; width:30%;">';
                                        } else {
                                            echo '<img src="../Dashboard/assets/img/preferences/nosmoking.png" alt="" style="border-radius:100%; width:30%;">';
                                        }

                                        if ($luggagePreference == 'luggage') {
                                            echo '<img src="../Dashboard/assets/img/preferences/luggage.png" alt="" style="border-radius:100%; width:30%;">';
                                        } else {
                                            echo '<img src="../Dashboard/assets/img/preferences/noluggage.png" alt="" style="border-radius:100%; width:30%;">';
                                        }
                                        ?>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    echo "No driver ads found.";
}


include("./common/footer.php");
?>