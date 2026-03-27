<?php
session_start();
require_once __DIR__ . '/../config/database.php';

function login($email, $password) {
    global $conn;

    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user;
        return true;
    }

    return false;
}

function check_auth() {
    return isset($_SESSION['user']);
}

function logout() {
    session_destroy();
}
?>
