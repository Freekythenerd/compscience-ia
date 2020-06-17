<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="web programming :: assignment 2" />
    <meta name="keywords" content="web, programming" />

    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="forms.css" />
    <link rel="stylesheet" href="main.css" />

    <title>addstudent</title>
</head>
   

    
<body>
    <?php include "header.php"; ?>
    <?php include "addstudent_functions.php" ?>

    <main class="container lead">
    <form action="addstudent.php" method="post">
        <fieldset>
            <legend>Add Student form</legend>
             <label for="name">name:  </label>
            <input type="text" name="name" id="name" />
            <br />
            <label for="age">age:  </label>
            <input type="number" name="age" id="age" />
            <br />
            <input type="submit" value="Create Student" class="btn btn-primary" /> 
        </fieldset>
    </form>


    </main>
</body>
</html>
