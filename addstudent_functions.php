
<?php
if (isset($_POST["name"], $_POST["age"]))
        Process_addstudent($_POST["name"], $_POST["age"]);
    
        function Process_addstudent($name,$age) {
            $error = "";
    
            // validate username, name and password
            if ($name == "")
                $error .= "please enter a name<br />";
    
            if ($age == "")
                $error .= "please enter an age<br />";
     
            // check if the user exists
            include "dbconnect.php";
            $query = "SELECT * FROM students WHERE username='".$name."'"; 
            echo $query;
                //look for an existing entry with that username
            $res = $conn->query($query);
            if ($res->num_rows != 0)
                $error .= "student already exists<br />";

            if ($error != "") {// failed to register
                print "<p>$error</p>";
            }
            else // successful create
             {
           // print "<p></p>";
           $query = "INSERT INTO students (name,age) VALUES ('".$_POST["name"]."',".$_POST["age"].")";
           if ($conn->query($query) === TRUE) {
                echo "New record created successfully";
                 header("Location: studentmaintenance.php"); // navigate to another page now
            }
            else {
                echo "Error: " . $query . "<br>" . $conn->error;
            }
            $conn->close();
           }
   }
?>