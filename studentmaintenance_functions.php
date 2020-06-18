<?php

function deletestudent($id,$selectedid){
    include "dbconnect.php";
    $query = "DELETE FROM students WHERE id= ".$id;
    $res = $conn->query($query); 
}

function updategrade($studentid,$classid,$grade){
    include "dbconnect.php";
    $query = 'UPDATE grades SET grade = "'.$grade.'" WHERE student_id= '.$studentid.' AND class_id = '.$classid;
    $res = $conn->query($query); 
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

function displaystudenttable($studentid, $classid) {
include "dbconnect.php";
    
$query = 'select s.name as "student", c.name as "class", g.grade, t.name as "teacher"
from students s inner join grades g on s.id = g.student_id 
inner join classes c on g.class_id = c.id
inner join teachers t on t.id = c.teacher_id';

if ($studentid != '' or $classid != ''){
    $query.= ' WHERE';
}
if ($studentid != ''){
    $query .= ' s.id ='.$studentid;
}
if ($studentid != '' and $classid != ''){
    $query.= ' AND';
}
if ($classid != ''){
    $query .= ' c.id ='.$classid;
}   
    
$query .= ' ORDER BY s.name DESC;';    

//echo $query;
    
$data = $conn->query($query);
//echo 'rows: '.mysqli_num_rows($data);

$output = '<table name="studenttable" class="table .table-bordered">';
    foreach($data as $key => $var) {
    $output .= '<tr>';
    foreach($var as $k => $v) {
     if ($key === 0) 
          $output .= '<td><strong>' . $k . '</strong></td>';
    }
    }
    foreach($data as $key => $var) {
    $output .= '<tr>';
    foreach($var as $k => $v) {
            if ("id" == $k) $id = $v;
            $output .= '<td>' . $v . '</td>';
    }
  $output .= '</tr>';
}
$output .= '</table>';
echo $output;
}

function returncurrentgrade($studentid, $classid) {
include "dbconnect.php";
    
$query = 'select s.id as "student id", s.name as "student", c.id as "class id", c.name as "class", g.grade, t.name as "teacher"
from students s inner join grades g on s.id = g.student_id 
inner join classes c on g.class_id = c.id
inner join teachers t on t.id = c.teacher_id';

if ($studentid != '' or $classid != ''){
    $query.= ' WHERE';
}
if ($studentid != ''){
    $query .= ' s.id ='.$studentid;
}
if ($studentid != '' and $classid != ''){
    $query.= ' AND';
}
if ($classid != ''){
    $query .= ' c.id ='.$classid;
}   
    
$query .= ' ORDER BY s.name DESC;';    

//echo $query;
$data = $conn->query($query);
if (mysqli_num_rows($data)==1){
    return mysqli_fetch_assoc($data);
        }
    else{
        return null;
        }
}
?>