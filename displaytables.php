<?php

function displaytables($query,$ordercol) {

include "dbconnect.php";
$query = $query." ORDER BY ".$ordercol ." DESC";
echo $query;
$data = $conn->query($query);

$output = '<table class="table .table-bordered">';
foreach($data as $key => $var) {
echo arrayvalue($var[0]);
    $output .= '<tr>';
    foreach($var as $k => $v) {
        if ($key === 0) {
            $output .= '<td><strong>' . $k . '</strong></td>';
        } else {
            $output .= '<td>' . $v . '</td>';
        }
    }
    if ($key === 0) {
    }
    else{ 
    $output .= '<td>' . ' <input type="submit" name="edit" value='.arrayvalue($var)[0].' class="btn btn-primary" /> ' . '</td>';       
        
    $output .= '<td>' . ' <input type="submit" value= "Delete" class="btn btn-primary" /> ' . '</td>';
    }
    $output .= '</tr>';
}
$output .= '</table>';
echo $output;
}

?>
