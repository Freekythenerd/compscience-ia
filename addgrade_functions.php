<?php

function Process_addgrade($student,$class,$grade) {
            include "dbconnect.php";
            $error = "";
            echo "here";
            // validate username, name and password

            if ($grade == "")
                $error .= "please enter a grade<br />";
    
            // check that the student exists
            //$query = "SELECT * FROM student
            //WHERE id= ".$student; 
            
            // check that the class exists
            //$query = "SELECT * FROM classes WHERE id=".$class; 
            //echo $query;

            if ($error != "") {// failed to create
                print "<p>$error</p>";
            }
            else // create
             {
           
           $query = "INSERT INTO grades (student_id, class_id,grade) VALUES (".$student.",".$class.",'".$grade."')";
           if ($conn->query($query) === TRUE) {
                echo "New record created successfully";
                 header("Location: studentmaintenance.php"); // 
            }
            else {
                echo "Error: " . $query . "<br>" . $conn->error;
            }
            $conn->close();
           }
   }
?>