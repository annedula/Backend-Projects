<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $pword = $_POST["password"];
    $email = $_POST["email"];

    try {
        require_once __DIR__ . "/dbh.inc.php";

        $query = "UPDATE users SET username = :username, passcode = :pword, email = :email WHERE id = 1;";

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