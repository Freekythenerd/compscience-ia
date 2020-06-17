<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="web programming :: assignment 2" />
    <meta name="keywords" content="web, programming" />

    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="forms.css" />
    <link rel="stylesheet" href="main.css" />

<title>addgrade</title>
</head>

<?php include "header.php"; ?>
<?php include "addgrade_functions.php"; ?>
<?php include "studentmaintenance_functions.php"; ?>
    
<?php
$studentid = '';
$classid = '';
    
if (isset($_POST["student"])) {
$studentid .= $_POST['student']; 
echo 'studentid:'.$studentid;
}
if (isset($_POST["class"])) {
$classid .= $_POST['class']; 
echo 'classid:'.$classid;
}  
    
if (isset($_POST["student"], $_POST["class"],$_POST["grade"]))
        Process_addgrade($_POST["student"], $_POST["class"], $_POST["grade"]);

$studentlist='';
$clientlist='';

$students = returnstableids("students","name",$studentid);
$classes = returnstableids("classes","name",$classid);   
?>    

<body>

    <br>
    <br>
    <form name="addgradeform" action="addgrade.php" method="post">
    <div class="search-box">
                <label for="student">select student:</label>
                <select id="id" name="student"> 
                        <?php
                            echo $students;
                        ?>
                </select>
                <br>
               <label for="class">select class:</label>
                <select id="id" name="class"> 
                        <?php
                            echo $classes;
                        ?>
                </select>
                <br>
                <label for="grade">grade</label>
                <input type="text" id="grade" name="grade"><br>
                <input type="submit" value="Add" name="submit" />    
        </div>
    </form>
    <br>

    
</body>
</html>
