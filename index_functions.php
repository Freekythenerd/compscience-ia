<?php
    Process();

    function Process() {
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
                  echo "<p>created students table successfully</p>";
                  include "dummydata.php";
              }
              else
              {
              
                  echo "<p>failed to create students table</p>";
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
                      echo "<p>Teachers table created successfully</p>";
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
                  else
                  {
                      echo "<p>Failed to create teachers table</p>";
                  }
              }

              }
?>