<!DOCTYPE html>
<html lang="en">
<title>yoooooooo</title>
<head>
    <link rel="stylesheet" href="css/bootstrap.css" />
    </head>
<body>
<?php include "header.php"; ?>
<?php
    session_start();
    if (!isset($_SESSION["name"]))
        header("Location: login.php");
?>
<?php
echo "You are now signed in as $profilename";
?>
</body>
</html>