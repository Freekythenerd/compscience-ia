
<?php
if (isset($_POST["name"], $_POST["teacherid"]))
        Process_addclass($_POST["name"], $_POST["teacherid"]);
    
        function Process_addclass($name,$teacherid) {
            $error = "";
    
            // validate username, name and password
            if ($name == "")
                $error .= "please enter a name<br />";
    
            if ($teacherid == "")
                $error .= "please enter an teacher<br />";
     
            // check if the user exists
            include "dbconnect.php";
            $query = "SELECT * FROM classes WHERE name='".$name."'"; 
            echo $query;
                //look for an existing entry with that class name
            $res = $conn->query($query);
            if ($res->num_rows != 0)
                $error .= "class already exists<br />";

            if ($error != "") {// failed to create
                print "<p>$error</p>";
            }
            else // successful create
             {
           // print "<p></p>";
           $query = "INSERT INTO classes (name,teacher_id) VALUES ('".$_POST["name"]."',".$_POST["teacherid"].")";
           if ($conn->query($query) === TRUE) {
                echo "New record created successfully";
                 header("Location: classmaintenance.php"); // navigate to another page now
            }
            else {
                echo "Error: " . $query . "<br>" . $conn->error;
            }
            $conn->close();
           }
   }
?>