<?php
session_start(); // Start the session

include("./common/nav.php");
include("../utilities/connection.php");

// Check if the user is logged in and has a valid session
if (!isset($_SESSION['driver_id'])) {
    // Redirect to login page or handle unauthorized access
    header("Location: login.php");
    exit();
}

// Retrieve driver_id from the session
$driver_id = $_SESSION['driver_id'];


if (isset($_POST['btn'])) {
    $from = $_POST['from'];
    $to = $_POST['to'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $pickup = $_POST["pickup"];
    $dropoff = $_POST['dropoff'];
    $seats = $_POST['seats'];
    $pps = $_POST['pps'];
    $description = $_POST['description'];

    // Get the selected values for smoking and luggage preferences
    $smoking = isset($_POST['smoking']) ? $_POST['smoking'] : '';
    $luggage = isset($_POST['luggage']) ? $_POST['luggage'] : '';

    // Use prepared statement to prevent SQL injection
    $stmt = $con->prepare("INSERT INTO `driver_ad`(`driver_id`, `location_from`, `location_to`, `date`, `time`, `pickup`, `dropoff`, `seats`, `price_per_seat`, `description`, `smoking`, `luggage`) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssssssssss", $driver_id, $from, $to, $date, $time, $pickup, $dropoff, $seats, $pps, $description, $smoking, $luggage);

    // Execute the SQL query to insert data into the database
    $result = $stmt->execute();

    $stmt->close();

    if ($result) {
        echo "<script>alert('Ride ad published successfully!')</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>

<link rel="stylesheet" href="./assets/css/style2.css">
    <body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-white">
        <div class="page-wrapper">
    
                <form class="page-content-wrapper" method="post">
                    <div class="page-content">
                        <div class="page-bar">
                            <div class="page-title-breadcrumb">
                                <div class="pull-left">
                                    <div class="page-title">
                                    Publish Your Ad <?php echo $driver_id ?>
                                    </div>
                                </div>
                                <ol class="breadcrumb page-breadcrumb pull-right">
                                    <li>
                                        <i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li>
                                        <a class="parent-item" href="">Forms</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li class="active">Form Layouts
                                    </li>
                                </ol>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>
                                          Location
                                        </header>
                                       
                                    </div>
                                    <div class="card-body" id="bar-parent5">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <input type="text" class="form-control" placeholder="From" name="from">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <input type="text" class="form-control" placeholder="To" name="to">
                                            </div>

                                        
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                      
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>
                                         Basic Details
                                        </header>
                                    </div>
                                    <div class="card-body" id="bar-parent2">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                               
                                           

                                                <div class="form-group">
                                                    <label>Date:</label><input type="date" class="form-control" placeholder="date" name="date">
                                                </div>

                                                
                                                <div class="form-group">
                                                    <label>Pickup:</label><input type="text" class="form-control" placeholder="Enter Pickup Location" name="pickup">
                                                </div>

                                                <div class="form-group">
                                                    <label>Seats:</label><input type="number" class="form-control" placeholder="Enter total Seats" name="seats">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea class="form-control" rows="3" name="description" placeholder="Enter Some Details for the help of your clients (Optional)"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                          
                                                <div class="form-group">
                                                    <label>Time:</label><input type="time" class="form-control" placeholder="time" name="time">
                                                </div>
                                                <div class="form-group">
                                                    <label>Dropoff:</label><input type="text" class="form-control" placeholder="Enter Dropoff Location" name="dropoff">
                                                </div>
                                                <div class="form-group">
                                                    <label>Price per seat:</label><input type="text" class="form-control" placeholder="Enter Price for per site" name="pps">
                                                </div>

                                              
                                       
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      

                        
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>
                                          Preferences
                                        </header>
                                       
                                    </div>
                                    <div class="card-body" id="bar-parent5">
                                        <div class="row">
                                           
                                       
                                        <div class="container parent">
                                            
                                        <label class="bgc">Smoking:</label>
    <div class="row">
        
     
       
         <div class='col text-center'>
         <input type="radio" name="smoking" id="img3" class="d-none imgbgchk" value="smoking">
         <label for="img3">
            <img src="./assets/img/preferences/smoking.png" alt="Image 3">
            <div class="tick_container">
              <div class="tick"><i class="fa fa-check"></i></div>
            </div>
          </label>
        </div>
        <div class='col text-center'>
            <input type="radio" name="smoking" id="img4" class="d-none imgbgchk" value="nosmoking">
            <label for="img4">
              <img src="./assets/img/preferences/nosmoking.png" alt="Image 4">
              <div class="tick_container">
                <div class="tick"><i class="fa fa-check"></i></div>
              </div>
            </label>
        </div>


      </div>
    </div>

    <div class="container parent mt-5">
                                            
                                            <label class="bgc">Luggage:</label>
        <div class="row">
            
         
           
        <div class='col text-center'>
            <input type="radio" name="luggage" id="img1" class="d-none imgbgchk" value="luggage">
            <label for="img1">
                <img src="./assets/img/preferences/luggage.png" alt="Image 3">
                <div class="tick_container">
                  <div class="tick"><i class="fa fa-check"></i></div>
                </div>
              </label>
            </div>
            <div class='col text-center'>
            <input type="radio" name="luggage" id="img2" class="d-none imgbgchk" value="noluggage">
            <label for="img2">
                  <img src="./assets/img/preferences/noluggage.png" alt="Image 4">
                  <div class="tick_container">
                    <div class="tick"><i class="fa fa-check"></i></div>
                  </div>
                </label>
            </div>
    
    
          </div>
        </div>
    

        

        
                                        
                                           
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div>
                                <button type="submit" class="btn btn-round btn-default" name="btn">Submit</button>
                                </div>
                            </div>
                        </div>
                 
                        
                    </div>
                </form><!-- end page content --><!-- start chat sidebar -->



                <div class="chat-sidebar-container" data-close-on-body-click="false">
                    <div class="chat-sidebar">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-toggle="tab">Theme</a>
                            </li>
                            <li class="nav-item">
                                <a href="#quick_sidebar_tab_2" class="nav-link tab-icon" data-toggle="tab">Settings</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane chat-sidebar-settings in show active animated shake" role="tabpanel" id="quick_sidebar_tab_1">
                                <div class="slimscroll-style">
                                    <div class="theme-light-dark">
                                        <h6>
                                            Sidebar Theme
                                        </h6><button type="button" data-theme="white" class="btn lightColor btn-outline btn-circle m-b-10 theme-button">Light Sidebar</button><button type="button" data-theme="dark" class="btn dark btn-outline btn-circle m-b-10 theme-button">Dark Sidebar</button>
                                    </div>
                                    <div class="theme-light-dark">
                                        <h6>
                                            Sidebar Color
                                        </h6>
                                        <ul class="list-unstyled">
                                            <li class="complete">
                                                <div class="theme-color sidebar-theme">
                                                    <a href="#" data-theme="white"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="blue"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="green"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <h6>
                                            Header Brand color
                                        </h6>
                                        <ul class="list-unstyled">
                                            <li class="theme-option">
                                                <div class="theme-color logo-theme">
                                                    <a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="logo-indigo"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <h6>
                                            Header color
                                        </h6>
                                        <ul class="list-unstyled">
                                            <li class="theme-option">
                                                <div class="theme-color header-theme">
                                                    <a href="#" data-theme="header-white"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="header-dark"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="header-blue"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="header-indigo"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="header-cyan"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="header-green"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- Start Setting Panel -->
                            <div class="tab-pane chat-sidebar-settings animated slideInUp" id="quick_sidebar_tab_2">
                                <div class="chat-sidebar-settings-list slimscroll-style">
                                    <div class="chat-header">
                                        <h5 class="list-heading">
                                            Layout Settings
                                        </h5>
                                    </div>
                                    <div class="chatpane inner-content">
                                        <div class="settings-list">
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Sidebar Position
                                                </div>
                                                <div class="setting-set">
                                                    <select class="sidebar-pos-option form-control input-inline input-sm input-small">
                                                        <option value="left" selected="selected">
                                                            Left
                                                        </option>
                                                        <option value="right">
                                                            Right
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Header
                                                </div>
                                                <div class="setting-set">
                                                    <select class="page-header-option form-control input-inline input-sm input-small">
                                                        <option value="fixed" selected="selected">
                                                            Fixed
                                                        </option>
                                                        <option value="default">
                                                            Default
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Sidebar Menu
                                                </div>
                                                <div class="setting-set">
                                                    <select class="sidebar-menu-option form-control input-inline input-sm input-small">
                                                        <option value="accordion" selected="selected">
                                                            Accordion
                                                        </option>
                                                        <option value="hover">
                                                            Hover
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Footer
                                                </div>
                                                <div class="setting-set">
                                                    <select class="page-footer-option form-control input-inline input-sm input-small">
                                                        <option value="fixed">
                                                            Fixed
                                                        </option>
                                                        <option value="default" selected="selected">
                                                            Default
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-header">
                                            <h5 class="list-heading">
                                                Account Settings
                                            </h5>
                                        </div>
                                        <div class="settings-list">
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Notifications
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-1"><input type="checkbox" id="switch-1" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Show Online
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-7"><input type="checkbox" id="switch-7" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Status
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-2"><input type="checkbox" id="switch-2" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    2 Steps Verification
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-3"><input type="checkbox" id="switch-3" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-header">
                                            <h5 class="list-heading">
                                                General Settings
                                            </h5>
                                        </div>
                                        <div class="settings-list">
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Location
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-4"><input type="checkbox" id="switch-4" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Save Histry
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-5"><input type="checkbox" id="switch-5" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Auto Updates
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-6"><input type="checkbox" id="switch-6" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end chat sidebar -->
            </div><!-- end page container --><!-- start footer -->
            <div class="page-footer">
                <div class="page-footer-inner">
                    2018 © ECab Taxi Admin Template By <a href="http://www.dedemao.com/" target="_top" class="makerCss">Redstartheme</a>
                </div>
                <div class="scroll-to-top">
                    <i class="material-icons">eject</i>
                </div>
            </div><!-- end footer -->
        </div><!-- start js include path -->
        <script src="assets/plugins/jquery/jquery.min.js"></script>
        <script src="assets/plugins/popper/popper.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script><!-- bootstrap -->
        <script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script><!-- Common js-->
        <script src="assets/js/app.js"></script>
        <script src="assets/js/layout.js"></script>
        <script src="assets/js/theme-color.js"></script><!-- Material -->
        <script src="assets/plugins/material/material.min.js"></script><!-- animation -->
        <script src="assets/js/pages/ui/animations.js"></script><!-- end js include path -->
    </body>
</html>