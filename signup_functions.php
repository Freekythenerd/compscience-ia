
<?php
if (isset($_POST["username"], $_POST["name"], $_POST["password"]))
        Process_Signup($_POST["username"], $_POST["name"], $_POST["password"]);
    
        function Process_Signup($username, $name, $password) {
            $error = "";
    
            // validate username, name and password
            if ($username == "")
                $error .= "please enter a username<br />";

            if ($name == "")
                $error .= "please enter a name<br />";
    
            if ($password == "")
                $error .= "please enter a password<br />";
     
            // check if the user exists
            include "dbconnect.php";
            $query = "SELECT * FROM teachers WHERE username='$username'";  //look for an existing entry with that username
            $res = $conn->query($query);
            if ($res->num_rows != 0)
                $error .= "userrname already exists<br />";

            if ($error != "") {// failed to register
                print "<p>$error</p>";
            }
            else // successful login
             {
           // print "<p>registered</p>";
           $query = "INSERT INTO teachers (username, name, password) VALUES ('".$_POST["username"]."','".$_POST["name"]."','".$_POST["password"]."')";
           if ($conn->query($query) === TRUE) {
                echo "New record created successfully";
                 header("Location: dashboard.php"); // navigate to another page now
            }
            else {
                echo "Error: " . $query . "<br>" . $conn->error;
            }
            $conn->close();
           }
   }
?>