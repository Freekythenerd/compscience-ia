<?php
    session_start();
    if (!isset($_SESSION["id"])) // check if user is logged in
        header("Location: login.php"); // redirect to login if not logged in
?>
<!DOCTYPE html>
<html lang="en">
<title>Student Maintenance</title>
<head>
    <link rel="stylesheet" href="css/bootstrap.css" />
    
    </head>
<body>
<?php include "header.php"; ?>
<?php include "studentmaintenance_functions.php"; ?>
    
<br>
<h1>Student Maintenance</h1>
<br>

<?php
include "dbconnect.php";

$studentid = '';
$classid = '';
$grade = '';
if (isset($_POST["student"])) {
$studentid .= $_POST['student']; 
//echo 'studentid'.$studentid;
}
if (isset($_POST["class"])) {
$classid .= $_POST['class']; 
//echo 'classid'.$classid;
}    
if (isset($_POST["grade"])) {
$grade .= $_POST['grade']; 
updategrade($studentid,$classid,$grade);    
//echo 'grade'.$grade;
}    

$studentlist='';
$clientlist='';

$students = returnstableids("students","name",$studentid);
$classes = returnstableids("classes","name",$classid);   

?>

    <form method="POST" name="search" action="studentmaintenance.php">
        <div id="studentgradegrid">
            
            <div class="search-box">
                <label for="student">filter by student:</label>
                <select id="id" name="student"> 
                    <option value="" selected="All">Select All</option>
                        <?php
                            echo $students;
                        ?>
                </select>
                
                <div class="search-box">
                <label for="class">filter by class:</label>
                <select id="id" name="class"> 
                    <option value="" selected="All">Select All</option>
                        <?php
                            echo $classes;
                        ?>
                </select>
                
                <br>
                <button id="Filter">Search</button>
                
            </div>
            <br><br>
                <?php
                    displaystudenttable($studentid,$classid);
                $updatedata = returncurrentgrade($studentid,$classid);
                ?>

              </tbody>
            </table>
 
        </div>
    </form>
    
            <input type="button" value="Add Student" onclick="location='addstudent.php'" class="btn btn-primary" />    
    
            <input type="button" value="Add new Grade" onclick="location='addgrade.php'" class="btn btn-primary" />  
    
    <?php
    if (isset($updatedata)){
        
        $grade = $updatedata["grade"];
        
        echo '<form action="studentmaintenance.php" method="post">
        <fieldset>
            <legend>Update grade</legend>
            <label for="student">student:  </label>
            <input type="text" name="student name" id="student name" value="'.$updatedata["student"].'" readonly />
            <br />
            <label for="class">class:  </label>
            <input type="text" name="class name" id="class name" value="'.$updatedata["class"].'" readonly />
            <br />
            <label for="grade">grade:  </label>
            <input type="text" name="grade" id="grade" value="'.$updatedata["grade"].'"/>
            <br />
            <input type="hidden" name="student" id="student" value="'.$updatedata["student id"].'" />
            <br />
            <input type="hidden" name="class" id="class" value="'.$updatedata["class id"].'" />

            <input type="submit" value="Update Grade" class="btn btn-primary" /> 
        </fieldset>
    </form>';
    }
    ?>
</body>    
    
</html>