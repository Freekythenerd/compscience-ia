<?php
    session_start();
    if (!isset($_SESSION["id"])) // check if user is logged in
        header("Location: login.php"); // redirect to login if not logged in
?>

<!DOCTYPE html>
<html lang="en">
<title>yoooooooo</title>
<head>
    <link rel="stylesheet" href="css/bootstrap.css" />
    </head>
<body>
<?php include "header.php"; ?>
<?php include "dbconnect.php" ?>
<?php
$ID = $_SESSION["id"];
//$query = "SELECT name FROM teachers WHERE id='$ID'";
//$res = $conn->query($query);
//$row = $res->fetch_assoc();
//$name = $row["name"];
echo "Welcome You are now signed in as ".$_SESSION["name"]."</p>";
?>

<br>
<fieldset>
            <legend>Navigation</legend>
            <input type="button" value="Student Maintenance" onclick="location='studentmaintenance.php'" class="btn btn-primary" />
        </fieldset>
<br>   
            <input type="button" value="Class Maintenance" onclick="location='classmaintenance.php'" class="btn btn-primary" />

</body>
</html>