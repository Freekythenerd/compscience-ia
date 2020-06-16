<?php

function deleteclass($id){
    include "dbconnect.php";
    $query = "DELETE FROM class WHERE id= ".$id;
    $res = $conn->query($query);
}


function displayclasstable($id) {

include "dbconnect.php";
$query = "SELECT * FROM classes ORDER BY name DESC";
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
    if ($key === 0) {
    }
    else{     
    $output .= '<td>' . ' <input type="submit" name="update'.$id.'" value="update" class="btn btn-primary" /> ' . '</td>';     
        
    $output .= '<td>' . ' <input type="button" onclick="classmaintenancefunctions.asp" name="delete'.$id.'" value="delete" class="btn btn-primary" /> ' . '</td>';
    }
    $output .= '</tr>';
}
$output .= '</table>';
echo $output;
}

?>
