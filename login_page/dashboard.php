<?php
session_start();
if (!isset($_SESSION["is_login"])) {
    header("Location: dashboard.php");
    exit();
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <h3>Welcome! 👋🎀</h3>
        <form action="dashboard.php" method="POST">
            <button type="submit" name="logout" class="btn">Logout</button>
        </form>
    </div>
</body>
</html>
