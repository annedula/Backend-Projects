<?php

declare(strict_types=1);

function display_username(){
    if (isset($_SESSION["userId"])) {
        echo "You are logged in As" . $_SESSION["user_username"];
    } else {
        echo "You are not logged in";
    }
}

function check_login_errors() {
    if (isset($_SESSION["errors_login"])) {
        $errors = $_SESSION["errors_login"];

        echo "<br>";

        foreach($errors as $error) {
            echo '<p class="form-error">' . $error . '</p>';
        }

        unset($_SESSION["errors_login"]);
    } else if (isset($_GET["login"]) && $_GET["login"] === "success"){
        
    }
}