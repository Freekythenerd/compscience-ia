<?php
    Process();

    function Process() {
        if (isset($_POST["username"]))
            echo "username:  " . $_POST["username"];

        if (isset($_POST["username"]))
            echo "password:  " . $_POST["password"];
    }
?>