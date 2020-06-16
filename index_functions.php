<?php
    Process_sql();

    function Process_sql() {
      include "dbconnect.php";
      
              // check if students table exists
              $query = "SELECT * FROM students";
              if(!$conn->query($query))
              {
                  $query = "CREATE TABLE IF NOT EXISTS students (";
                  $query .= "id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,";
                  $query .= "name VARCHAR(30) NOT NULL,";
                  $query .= "age INT NOT NULL)";
                  if ($conn->query($query))
                  echo "<p>DEBUG: created students table successfully</p>";
                  include "dummydata.php";
              }
              else
              {
              
                  echo "<p>DEBUG: failed to create students table</p>";
              }
              // check if teachers table exists
              $query = "SELECT * FROM teachers";
              if(!$conn->query($query))
              {
                  $query = "CREATE TABLE IF NOT EXISTS teachers (";
                  $query .= "id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,";
                  $query .= "username VARCHAR(30) NOT NULL,";
                  $query .= "name VARCHAR(30) NOT NULL,";
                  $query .= "password VARCHAR(30) NOT NULL)";
                  if ($conn->query($query))
                  {
                      echo "<p>DEBUG: Teachers table created successfully</p>";
                      for ($i = 0; $i < 10; $i++) //Inserting data in each row of the table
                  {
                  $name = $tnames[rand(0, count($tnames) - 1)];
                  $username = $usernames[$i];
                  $password = $name;
                  $query = "INSERT INTO teachers (username, name, password) ";
                    $query .= "VALUES ('$username', '$name', '$password')";
                    $conn->query($query);
 
                  }
                }
                }
                  else
                  {
                      echo "<p>DEBUG: Failed to create teachers table</p>";
                  }
              

               // check if classes table exists
              $query = "SELECT * FROM classes";
              if(!$conn->query($query))
              {
                  $query = "CREATE TABLE IF NOT EXISTS classes (";
                  $query .= "id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,";
                  $query .= "name VARCHAR(30) NOT NULL,";
                  $query .= "teacher_id INT NOT NULL)";
                  if ($conn->query($query))
                  echo "<p>DEBUG: created classes table successfully</p>";
                  include "dummydata.php";
              }
              else
              {
                  echo "<p>DEBUG: failed to create classes table</p>";
              }

                  // check if grades table exists
              $query = "SELECT * FROM grades";
              if(!$conn->query($query))
              {
                  $query = "CREATE TABLE IF NOT EXISTS grades (";
                  $query .= "id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,";
                  $query .= "grade VARCHAR(1) NOT NULL,";
                  $query .= "student_id INT NOT NULL,";
                  $query .= "class_id INT NOT NULL)";
                  //echo $query;
                  if ($conn->query($query))
                  echo "<p>DEBUG: created grades table successfully</p>";
                  include "dummydata.php";
              }
              else
              {
                  echo "<p>DEBUG: failed to create grades table</p>";
              }
    }
?>