<!DOCTYPE html>
<html lang="en">
<title>yoooooooo</title>
<head>
    <link rel="stylesheet" href="css/bootstrap.css" />
    </head>
<body>
<?php include "header.php"; ?>
<?php include "index_functions.php" ?>

<?php
    if (isset($_SESSION["id"])) { // check if user is logged in
        echo "<p>you are logged in ";}
    else {
        echo "<p>please login</p>";}
?>
</body>
</html>