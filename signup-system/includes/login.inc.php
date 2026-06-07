<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"]; 
    $pwd = $_POST["pwd"];
    
    try {
        require_once __DIR__ . '/dbh.inc.php';
        require_once __DIR__ .  '/login_controller.inc.php';
        require_once __DIR__ . '/login_view.inc.php';
        require_once __DIR__ . '/login_model.inc.php';

        // ERROR HANDLERS
        $errors = [];

        if (is_input_empty($username, $pwd, $email)) {
            $errors["empty_input"] = "Fill in all fields!";
        }

        require_once __DIR__ . '/config_session.inc.php';

        if ($errors) {
            $_SESSION["errors_signup"] = $errors;

            $signupData = [
                'username' => $username,
                'email' => $email
            ];
            $_SESSION["signup_data"] = $signupData;

            header("Location: ../index.php");
            die();
        }

        create_user($pdo, $username, $pwd, $email);
        header("Location: ../index.php?signup=success");

        $pdo = null;
        $stmt = null;
        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location:  ../index.php");
    die();
}