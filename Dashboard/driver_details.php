<?php
session_start(); // Start the session

include("../utilities/connection.php");

$username = $_SESSION['signup_username'];

// Check if the user has completed the previous step
if (!isset($_SESSION['registration_step']) || $_SESSION['registration_step'] < 1) {
    header("Location: signup.php"); // Redirect to the signup page if the previous step is not completed
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process registration form submission

    $full_name = $_POST["full_name"];
    $address = $_POST["address"];
    $post_code = $_POST["post_code"];
    $phone = $_POST["phone"];
    $driving_license_no = $_POST["driving_license_no"];
    $cnic = $_POST["cnic"];

    // Insert into driver_details table
    $driverIdQuery = "SELECT id FROM drivers WHERE username=?";
    $stmt = $con->prepare($driverIdQuery);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['driver_id'] = $row["id"]; // Set the driver_id in the session
        $driverId = $_SESSION['driver_id'];

        if (!empty($_FILES['driver_pic']['name']) && !empty($_FILES['driving_license_pic']['name']) && !empty($_FILES['cnic_front_pic']['name']) && !empty($_FILES['cnic_back_pic']['name'])) {
            $driver_pic = $_FILES['driver_pic']['name'];
            $driving_license_pic = $_FILES['driving_license_pic']['name'];
            $cnic_front_pic = $_FILES['cnic_front_pic']['name'];
            $cnic_back_pic = $_FILES['cnic_back_pic']['name'];

            $temp_driver_pic = $_FILES['driver_pic']['tmp_name'];
            $temp_driving_license_pic = $_FILES['driving_license_pic']['tmp_name'];
            $temp_cnic_front_pic = $_FILES['cnic_front_pic']['tmp_name'];
            $temp_cnic_back_pic = $_FILES['cnic_back_pic']['tmp_name'];

            // Move the uploaded files
            move_uploaded_file($temp_cnic_front_pic, "../Images/Driver/cnic/front/$cnic_front_pic");
            move_uploaded_file($temp_cnic_back_pic, "../Images/Driver/cnic/back/$cnic_back_pic");
            move_uploaded_file($temp_driving_license_pic, "../Images/Driver/driving_license/$driving_license_pic");
            move_uploaded_file($temp_driver_pic, "../Images/Driver/profile/$driver_pic");

            $insert = "INSERT INTO `pending_driver_details`
                (`driver_id`, `full_name`, `address`, `post_code`, `phone`, `driving_license_no`, `cnic`, `driver_pic`, `driving_license_pic`, `cnic_front_pic`, `cnic_back_pic`)
                VALUES 
                ('$driverId','$full_name','$address','$post_code','$phone','$driving_license_no','$cnic','$driver_pic','$driving_license_pic','$cnic_front_pic','$cnic_back_pic')";

            if ($con->query($insert) === TRUE) {
                echo "Registration successful!";
                $_SESSION['registration_step'] = 2; // Set the registration step to 2
                header("location: add_vehicle.php");
                exit;
            } else {
                echo "Error: " . $insert . "<br>" . $con->error;
            }
        } else {
            echo "Please upload all required files.";
        }
    } else {
        echo "Driver not found!";
    }

    $stmt->close();
    $con->close();
}

include("./common/nav.php");
?>


<div class="page-content-wrapper">
                    <div class="page-content">
                        <div class="page-bar">
                            <div class="page-title-breadcrumb">
                                <div class="pull-left">
                                    <div class="page-title">
                                        Driver Registration
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                        
                        <form class="row" method="post" enctype="multipart/form-data">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <div class="card-head">
                                        <header>
                                            Details
                                        </header>
                                    </div>
                                    <div class="card-body row">
                                        <div class="col-lg-6 p-t-20">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" name="full_name" type="text" id="txtVno"><label class="mdl-textfield__label">Full Name</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 p-t-20">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" name="address" type="text" id="txtVno"><label class="mdl-textfield__label">Address</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 p-t-20">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" name="post_code" type="text" id="txtVno"><label class="mdl-textfield__label">Post Code</label>
                                            </div>
                                        </div>
                          
                                        <div class="col-lg-6 p-t-20">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" name="phone" type="text" id="date1"><label class="mdl-textfield__label">Phone</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 p-t-20">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" name="driving_license_no" type="text" id="date1"><label class="mdl-textfield__label">Driving License Number</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 p-t-20">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                <input class="mdl-textfield__input" name="cnic" type="text" id="date1"><label class="mdl-textfield__label">CNIC</label>
                                            </div>
                                        </div>

                                      <div class="col-lg-6 p-t-20">
                                        <label for="">Upload Your Picture</label>
                                        <br>
                                        <input type="file" name="driver_pic">
                                      </div>

                                      <div class="col-lg-6 p-t-20">
                                        <label for="">Upload Your Driving License Front Picture</label>
                                        <br>
                                        <input type="file" name="driving_license_pic">
                                      </div>

                                      <div class="col-lg-6 p-t-20">
                                        <label for="">Upload Your CNIC Front Pic</label>
                                        <br>
                                        <input type="file" name="cnic_front_pic">
                                      </div><div class="col-lg-6 p-t-20">
                                        <label for="">Upload Your CNIC Back Pic</label>
                                        <br>
                                        <input type="file" name="cnic_back_pic">
                                      </div>

                                        
                                        <div class="col-lg-12 p-t-20 text-center mt-5">
                                            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button><button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>



                    </div>
                </div><!-- end page content -->
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              
            
            <?php 
include("./common/footer.php");
?>
