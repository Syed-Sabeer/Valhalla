<?php
include("./common/head.php");

// Assuming you have a utilities/connection.php file for database connection
include("../utilities/connection.php");

$error_message = ""; // Initialize the error message

if (isset($_POST["btn"])) {
    $user2 = $_POST["username2"];
    $Pass2 = $_POST["pass2"];

    // Using prepared statements to prevent SQL injection
    $signin = "SELECT * FROM `drivers` WHERE username = ? AND password = ?";
    $stmt = mysqli_prepare($con, $signin);

    // Check if the statement preparation is successful
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $user2, $Pass2);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        $num = mysqli_num_rows($result);

        if ($num != 0) {
            $array = mysqli_fetch_assoc($result);
            $_SESSION['driver'] = $array['firstname'];
            
            // Set the registration step to a default value (adjust as needed)
            $_SESSION['registration_step'] = 3;
            
            // Redirect to the home page
            header("location:index.php");
            exit();
        
            
        } else {
            $error_message = "Username or Password is Incorrect";
        }}
}
?>

<div class="limiter">
    <div class="container-login100 page-background">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="post" action="">
                <span class="login100-form-logo"><img alt="" src="assets/img/taxi.png"></span><span class="login100-form-title p-b-34 p-t-27">Log in</span>
                <?php
                if (!empty($error_message)) {
                    echo '<div class="alert alert-danger" role="alert">' . $error_message . '</div>';
                }
                ?>
                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input class="input100" type="text" name="username2" placeholder="Username" value="<?php echo isset($username) ? $username : ''; ?>"><span class="focus-input100" data-placeholder=""></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="pass2" placeholder="Password"><span class="focus-input100" data-placeholder=""></span>
                </div>
                <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me"> <label class="label-checkbox100" for="ckb1">Remember me</label>
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit" name="btn">Login</button>
                </div>
                <div class="text-center p-t-50">
                    <a class="txt1" href="forgot_password.php">Forgot Password?</a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- start js include path -->
<script src="assets/plugins/jquery/jquery.min.js"></script><!-- bootstrap -->
<script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="assets/js/pages/extra_pages/login.js"></script><!-- end js include path -->
</body>
</html>
