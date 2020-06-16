<?php
    // some stuff to init the current user
    include "dbconnect.php";

    $email = $_SESSION["email"];
    $query = "SELECT * FROM students WHERE student_id = '$studentID'";
    $result = $conn->query($query)->fetch_assoc();
    $user = new User($result["student_id"]);
?>