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
<?php include "studentmaintenance_functions.php"; ?>
    
<br>
<h1>Student Maintenance</h1>
<br>

    
<?php displaystudenttable("id"); ?>
    
<br>
<br>
 <input type="button" value="Add Student" onclick="location='addstudent.php'" class="btn btn-primary" />    

</body>
</html>