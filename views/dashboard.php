<?php
require '../core/auth.php';

if (!check_auth()) {
    header("Location: login.php");
    exit;
}
?>

<h1>Dashboard</h1>
<p>Welcome <?= $_SESSION['user']['name'] ?></p>

<a href="logout.php">Logout</a>
?>
