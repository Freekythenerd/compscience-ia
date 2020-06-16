<?php
    if (isset($_POST["username"], $_POST["password"]))
        Process($_POST["username"], $_POST["password"]);
    
        function Process($username, $password) {
            $error = "";
    
            // validate username and password
            if ($username == "")
                $error .= "please enter a username<br />";
    
            if ($password == "")
                $error .= "please enter a password<br />";
    
            // check if the user exists
            include "dbconnect.php";
            $query = "SELECT * FROM teachers WHERE username='$username' AND password='$password'";
            $res = $conn->query($query);
            if ($res->num_rows == 0)
                $error .= "invalid login<br />";
    
            if ($error != "") // failed to login
            {
                print "<p>$error</p>";
            }
            else // successful login
            {
                session_start();
                $row = $res->fetch_assoc();
                $_SESSION["id"] = $row["id"];
                $_SESSION["name"] = $row["name"];
               //print "<p>login successful, Name".$_SESSION["name"]."  Teacher ID".$_SESSION["id"]. "</p>";
               header("Location: dashboard.php"); // navigate to another page now
            }
        }

       function logout(){
            session_start();
            session_unset();
            session_destroy();
        }   
 
?>