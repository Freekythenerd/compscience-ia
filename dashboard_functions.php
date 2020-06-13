<?php
include "dbconnect.php";
    Process();

    function Process() {
        
        $ID = $_SESSION["id"];
        $query = "SELECT name FROM teachers WHERE id='$ID'";
        $res = $conn->query($query);
        $row = $res->fetch_assoc();
        $name = $row["name"];
        echo "You are now signed in as: $name";
        
    }
            
    ?>