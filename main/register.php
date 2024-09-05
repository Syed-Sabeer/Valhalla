<?php 


session_start();
    
include("../utilities/connection.php");

if (isset($_POST["btn"])) {
    $firstname = $_POST["f-name"];
    $lastname = $_POST["l-name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $date_created = date('Y-m-d H:i:s');
    $validNamePattern = '/^[A-Za-z]+$/';

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>$(document).ready(function() { $('#e-error').html('Please enter a valid email address.'); });</script>";
    } else {
        // First Name and Last Name Validation
        $validNamePattern = '/^[A-Za-z]+$/'; // Regex pattern for only letters

        if (empty($firstname) || !preg_match($validNamePattern, $firstname)) {
            echo "<script>$(document).ready(function() { $('#f-error').html('Please enter a valid first name containing only letters.'); });</script>";
        } elseif (empty($lastname) || !preg_match($validNamePattern, $lastname)) {
            echo "<script>$(document).ready(function() { $('#l-error').html('Please enter a valid last name containing only letters.'); });</script>";
        } else {
            // All fields are valid, proceed with registration
            $insert = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `date_created`) VALUES ('$firstname','$lastname','$email','$password','$date_created')";
            $run = mysqli_query($con, $insert);

            if ($run) {
                header("location: login.php");
                exit;
            }
        }
    }
}




include("./common/nav.php");



?>

        
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {


    // Function to check if the email exists in the database
    function checkEmail() {
        var email = $("input[name='email']").val();
        $.ajax({
            url: "./common/check_email.php", // Replace with the PHP file that checks the email
            method: "POST",
            data: { email: email },
            success: function(response) {
                if (response === "exists") {
                    $("#e-error").html("Email already exists!");
                } else {
                    $("#e-error").html("");
                }
                checkButtonStatus();
            }
        });
    }

    function checkEmptyFields() {
        var firstname = $("input[name='f-name']").val();
        var lastname = $("input[name='l-name']").val();
      
        var email = $("input[name='email']").val();
        var password = $("input[name='password']").val();
        var repeatpassword = $("input[name='pass2']").val();

        var isEmpty = !firstname || !lastname || !email || !password || !repeatpassword;
        if (isEmpty) {
            $("#sign-error").html("");
        } else {
            $("#sign-error").html("");
        }

        // Check password length
        if (password.length < 8) {
            $("#pass-error").html("Weak Password");
        } else {
            $("#pass-error").html("");
        }

        // Recheck password match when either password field is updated
        checkPasswordMatch();

        checkButtonStatus();
    }

    // Function to check if first name and last name contain only letters
    function checkfNameFields() {
        var firstname = $("input[name='f-name']").val();

        // Check if first name and last name contain only letters
        var validNamePattern = /^[A-Za-z]+$/;
        var isFirstNameValid = validNamePattern.test(firstname);

        // Display error messages for first and last name
        if (!isFirstNameValid) {
            $("#f-error").html("Should contain letters only");
        } else {
            $("#f-error").html("");
        }

        checkButtonStatus();
    }

    function checklNameFields() {
        var lastname = $("input[name='l-name']").val();

        // Check if first name and last name contain only letters
        var validNamePattern = /^[A-Za-z]+$/;
        var isLastNameValid = validNamePattern.test(lastname);

        if (!isLastNameValid) {
            $("#l-error").html("Should contain letters only");
        } else {
            $("#l-error").html("");
        }

        checkButtonStatus();
    }

    function checkPasswordMatch() {
        var password = $("input[name='password']").val();
        var repeatPassword = $("input[name='pass2']").val();

        if (password === repeatPassword) {
            $("#pass2-error").html("");
        } else {
            $("#pass2-error").html("Passwords do not match.");
        }

        checkButtonStatus();
    }

    // Function to check the overall button status and enable/disable it accordingly
    function checkButtonStatus() {
    
        var emailError = $("#e-error").html();
        var fnameError = $("#f-error").html();
        var lnameError = $("#l-error").html();
        var passwordMatchError = $("#pass2-error").html();
        var emptyFieldsError = $("#sign-error").html();
        var passwordLengthError = $("#pass-error").html(); // New variable for password length error

        // Disable the button if there are any errors or empty fields or password length error
        $("button[name='btn']").prop("disabled",  emailError || passwordMatchError || fnameError || lnameError || emptyFieldsError || passwordLengthError);
    }

    // Bind events to input fields to trigger validation
 
    $("input[name='email']").on("input", checkEmail);
    $("input[name='f-name']").on("input", checkfNameFields);
    $("input[name='l-name']").on("input", checklNameFields);
    $("input[name='password'], input[name='pass2']").on("input", checkEmptyFields); // Check empty fields for both passwords


    // Initial button status check
    checkButtonStatus();
});
</script>

<div class="sidebar-popup">
<div class="sidebar-wrapper">
<div class="sidebar-content">
<button type="button" class="close-sidebar-popup"><i class="far fa-xmark"></i></button>
<div class="sidebar-logo">
<img src="assets/img/logo/logo.png" alt>
</div>
<div class="sidebar-about">
<h4>About Us</h4>
<p>There are many variations of passages available sure there majority have suffered alteration in
some form by injected humour or randomised words which don't look even slightly believable.</p>
</div>
<div class="sidebar-contact">
<h4>Contact Info</h4>
<ul>
<li>
<h6>Email</h6>
<a href="/cdn-cgi/l/email-protection#5d34333b321d38253c302d3138733e3230"><i class="far fa-envelope"></i><span class="__cf_email__" data-cfemail="e48d8a828ba4819c8589948881ca878b89">[email&#160;protected]</span></a>
</li>
<li>
<h6>Phone</h6>
<a href="tel:+21236547898"><i class="far fa-phone"></i>+2 123 654 7898</a>
</li>
<li>
<h6>Address</h6>
<a href="#"><i class="far fa-location-dot"></i>25/B Milford Road, New York</a>
</li>
</ul>
</div>
<div class="sidebar-social">
<h4>Follow Us</h4>
<a href="#"><i class="fab fa-facebook"></i></a>
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="#"><i class="fab fa-instagram"></i></a>
<a href="#"><i class="fab fa-linkedin"></i></a>
</div>
</div>
</div>
</div>

<main class="main">

<div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
<div class="container">
<h2 class="breadcrumb-title">Register</h2>
<ul class="breadcrumb-menu">
<li><a href="index.php">Home</a></li>
<li class="active">Register</li>
</ul>
</div>
</div>


<div class="login-area py-120">
<div class="container">
<div class="col-md-5 mx-auto">
<div class="login-form">
<div class="login-header">
<img src="assets/img/logo/logo.png" alt>
<p>Create your Valhalla account</p>
</div>
<form method="POST">
<div class="form-group">
<label>First Name</label>
<label id="f-error" style="color: red;">&nbsp;</label>
<input type="text" class="form-control" placeholder="Your First Name" name="f-name" required>

</div>
<div class="form-group">
    <label>Last Name</label>
    <label id="l-error" style="color: red;">&nbsp;</label>
    <input type="text" class="form-control" placeholder="Your Last Name" name="l-name" required>
    </div>
<div class="form-group">
<label>Email Address</label>
<label id="e-error" style="color: red;">&nbsp; </label>
<input type="email" class="form-control" placeholder="Your Email" name="email" required>
</div>
<div class="form-group">
<label>Password</label>
<label id="pass-error" style="color: red;">&nbsp; </label>
<input type="password" class="form-control" placeholder="Your Password" name="password" required>
</div>
<div class="form-group">
    <label>Confirm Password</label>
    <label id="pass2-error" style="color: red;">&nbsp; </label>
    <input type="password" class="form-control" placeholder="Retype Your Password" name="pass2" required>
    </div>
<div class="form-check form-group">
<input class="form-check-input" type="checkbox" value id="agree">
<label class="form-check-label" for="agree">
I agree with the <a href="#">Terms Of Service.</a>
</label>
</div>
<div class="d-flex align-items-center">
<button type="submit" class="theme-btn" name="btn"><i class="far fa-paper-plane"></i> Register</button>
</div>
</form>
<div class="login-footer">
<p>Already have an account? <a href="login.php">Login.</a></p>
<p> <a href="../Dashboard/index.php">Create Driver Account?</a></p>

</div>
</div>
</div>
</div>
</div>

</main>

<?php 
include("./common/footer.php");
?>