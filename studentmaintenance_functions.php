
<?php
include "dbconnect.php";
    $query = "SELECT * FROM 'students'";
 echo "running select function";
if ($res = $conn->query($query)) {
 
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["col1"];
        $field2name = $row["col2"];
        $field3name = $row["col3"];
        $field4name = $row["col4"];
        $field5name = $row["col5"];
        echo "fetched arrays";
        
    }
        
    /* free result set */
    $result->free();
}

?>