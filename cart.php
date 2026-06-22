<?php

// Start session
session_start();

// Include database connection
require "config.php";


// Create cart array if it doesn't exist
if (!isset($_SESSION["cart"])) {

    $_SESSION["cart"] = [];

}
