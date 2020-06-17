<?php

function deleteclass($id){
    include "dbconnect.php";
    $query = "DELETE FROM class WHERE id= ".$id;
    $res = $conn->query($query);
}


function displayclasstable($id) {

include "dbconnect.php";
$query = "SELECT c.name as 'class name', t.name as 'teacher name' FROM classes c inner join teachers t on c.teacher_id = t.id ORDER BY c.name";
//echo $query;
$data = $conn->query($query);

$output = '<table class="table .table-bordered">';
foreach($data as $key => $var) {
    $output .= '<tr>';
    foreach($var as $k => $v) {
        if ($key === 0) {
            $output .= '<td><strong>' . $k . '</strong></td>';
        } else {
            if ("id" == $k) $id = $v;
            $output .= '<td>' . $v . '</td>';
        }
    }
   
    $output .= '</tr>';
}
$output .= '</table>';
echo $output;
}

?>
