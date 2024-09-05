<?php
session_start();


if (!isset($_SESSION['signup_username'])) {
    header("Location: driver_details.php");
    exit();
}
