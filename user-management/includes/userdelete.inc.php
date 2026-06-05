<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $pword = $_POST["password"];
    $email = $_POST["email"];

    try {
        require_once __DIR__ . "/dbh.inc.php";

        $query = "INSERT INTO users (username, passcode, email) VALUES (:username, :pword, :email);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pword", $pword);
        $stmt->bindParam(":email", $email);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: index.php");

        exit();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: index.php");
}