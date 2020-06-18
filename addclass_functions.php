
<?php
if (isset($_POST["name"], $_POST["teacherid"]))
        Process_addclass($_POST["name"], $_POST["teacherid"]);
    
        function Process_addclass($name,$teacherid) {
            $error = "";
    echo "here";
            
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

function returnstableids($tablename,$displaycol,$selectedid){
    $list = '';
    
    include "dbconnect.php";
    $query = 'SELECT id,'. $displaycol . ' FROM '. $tablename. ' ORDER BY '. $displaycol.';';
    $result = $conn->query($query);
    
    if (! empty($result)) {
        foreach ($result as $key => $value) {
            foreach($value as $k => $v)
            if ("id" == $k){
                $list .= '<option';
                    if ($selectedid == $v){
                        $list .= ' selected ';
                        }
                 $list .= ' value="'.$v.'">';
                }
        else {
        $list .= $v.'</option>'; 
        }
        }
        return $list;
        }
} 
?>