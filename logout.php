<!DOCTYPE html>
<html lang="en">
<title>yoooooooo</title>

<?php include "login_functions.php" ?>

<head>
    <link rel="stylesheet" href="css/bootstrap.css" />
    </head>
<body>
<?php include "header.php"; ?>

<?php
// print "<p>login successful, Name".$_SESSION["name"]."  Teacher ID".$_SESSION["id"]. "</p>";
     logout(); //log user out
        echo "<p>you are logged out</p>";
?>

</body>
</html>