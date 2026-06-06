<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"]; 
    $pwd = $_POST["pwd"]; 
    $email = $_POST["email"];
    
    try {

        require_once "dbh.inc.php";
        require_once "signup_model.inc.php";
        require_once "signup_view.inc.php";
        require_once "signup_controller.inc.php";
        

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../index.php");
    die();
}

