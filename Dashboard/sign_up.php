<?php
session_start();

include("../utilities/connection.php");

// Check if the user is already logged in or completed the registration
if (isset($_SESSION['user_id']) || isset($_SESSION['registration_step']) && $_SESSION['registration_step'] > 1) {
    header("Location: dashboard.php"); // Redirect to the dashboard or appropriate page
    exit;
}

$username = "";

if (isset($_POST["btn"])) {
    $firstname = $_POST["f-name"];
    $lastname = $_POST["l-name"];
    $username = $_POST["u-name"];
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
            $insert = "INSERT INTO `drivers`(`firstname`, `lastname`, `username`, `email`, `password`, `date_created`) VALUES ('$firstname','$lastname','$username','$email','$password','$date_created')";
            $run = mysqli_query($con, $insert);

            if ($run) {
                $username = $_POST["u-name"];
                $_SESSION['signup_username'] = $username;
                $_SESSION['registration_step'] = 1; // Set the registration step to 1
                header("location: driver_details.php");
                exit;
            }
        }
    }
}

include("./common/head.php");
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
// Function to check if the username exists in the database
function checkUsername() {
    var username = $("input[name='u-name']").val();
    $.ajax({
        url: "./common/check_username.php", // Replace with the PHP file that checks the username
        method: "POST",
        data: { username: username },
        success: function(response) {
            if (response === "exists") {
                $("#u-error").html("Username already exists!");
            } else {
                $("#u-error").html("");
            }
            checkButtonStatus();
        }
    });
}

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
    var username = $("input[name='u-name']").val();
    var email = $("input[name='email']").val();
    var password = $("input[name='password']").val();
    var repeatpassword = $("input[name='pass2']").val();

    var isEmpty = !firstname || !lastname || !username || !email || !password || !repeatpassword;
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
    var usernameError = $("#u-error").html();
    var emailError = $("#e-error").html();
    var fnameError = $("#f-error").html();
    var lnameError = $("#l-error").html();
    var passwordMatchError = $("#pass2-error").html();
    var emptyFieldsError = $("#sign-error").html();
    var passwordLengthError = $("#pass-error").html(); // New variable for password length error

    // Disable the button if there are any errors or empty fields or password length error
    $("button[name='btn']").prop("disabled", usernameError || emailError || passwordMatchError || fnameError || lnameError || emptyFieldsError || passwordLengthError);
}

// Bind events to input fields to trigger validation
$("input[name='u-name']").on("input", checkUsername);
$("input[name='email']").on("input", checkEmail);
$("input[name='f-name']").on("input", checkfNameFields);
$("input[name='l-name']").on("input", checklNameFields);
$("input[name='password'], input[name='pass2']").on("input", checkEmptyFields); // Check empty fields for both passwords


// Initial button status check
checkButtonStatus();
});
</script>

<body>
    <div class="limiter">
        <div class="container-login100 page-background">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="post">
                    <span class="login100-form-logo"><img alt="" src="assets/img/taxi.png"></span><span
                        class="login100-form-title p-b-34 p-t-27">Registration</span>
                    <div class="row">
                        <div class="col-lg-6 p-t-20">
                            <div class="wrap-input100 validate-input" data-validate="Enter firstname">
                            
                                <input class="input100" type="text" name="f-name" placeholder="First Name"><span
                                    class="focus-input100" data-placeholder=""></span>
                                    <label id="f-error" style="color: red;">&nbsp;</label>
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div class="wrap-input100 validate-input" data-validate="Enter lastname">
                                <input class="input100" type="text" name="l-name" placeholder="Last Name"><span
                                    class="focus-input100" data-placeholder=""></span>
                                    <label id="l-error" style="color: red;">&nbsp;</label>
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div class="wrap-input100 validate-input" data-validate="Enter username">
                                <input class="input100" type="text" name="u-name" placeholder="Username" value="<?php echo $username; ?>"> <span
                                    class="focus-input100" data-placeholder=""></span>
                                    <label id="u-error" style="color: red;">&nbsp;</label>
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div class="wrap-input100 validate-input" data-validate="Enter email">
                                <input class="input100" type="email" name="email" placeholder="Email"><span
                                    class="focus-input100" data-placeholder=""></span>
                                    <label id="e-error" style="color: red;">&nbsp; </label>
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div class="wrap-input100 validate-input" data-validate="Enter password">
                                <input class="input100" type="password" name="password" placeholder="Password"><span
                                    class="focus-input100" data-placeholder=""></span>
                                    <label id="pass-error" style="color: red;">&nbsp; </label>
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div class="wrap-input100 validate-input" data-validate="Enter password again">
                                <input class="input100" type="password" name="pass2"
                                    placeholder="Confirm password"><span class="focus-input100"
                                    data-placeholder=""></span>
                                    <label id="pass2-error" style="color: red;">&nbsp; </label>
                            </div>
                        </div>
                    </div>
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me"> <label
                            class="label-checkbox100" for="ckb1">Remember me</label>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" name="btn">Sign Up</button>
                    </div>
                    <div class="text-center p-t-50">
                        <a class="txt1" href="#">You already have a membership?</a>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- start js include path -->
    <script src="assets/plugins/jquery/jquery.min.js"></script><!-- bootstrap -->
    <script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="assets/js/pages/extra_pages/login.js"></script><!-- end js include path -->
</body>

</html>