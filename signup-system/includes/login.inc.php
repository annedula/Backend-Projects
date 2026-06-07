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

        $result = get_user($pdo, $username);

        if (is_username_invalid($result)) {
            $errors["login_incorrect"] = "Incorrect login credentials";
        }

        require_once __DIR__ . '/config_session.inc.php';

        if ($errors) {
            $_SESSION["errors_login"] = $errors;

            header("Location: ../index.php");
            die();
        }

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["Id"];
        session_id($sessionId);

        $_SESSION["userId"] = $result["Id"];
        $_SESSION["user_username"] = $result["username"];

        $_SESSION["last_regeneration"] = time();

        header("Location: ../index.php?login=success");
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