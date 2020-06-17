<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="web programming :: assignment 2" />
    <meta name="keywords" content="web, programming" />

    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="forms.css" />
    <link rel="stylesheet" href="main.css" />

    <title>addclass</title>
</head>

<body>
    <?php 
    include "header.php";
    include "addclass_functions.php";
    $teachers = '';

    $teachers = returnstableids("teachers","name",NULL);    
    ?>

    <main class="container lead">
    <form action="addclass.php" method="post">
        <fieldset>
            <legend>Add Class</legend>
             <label for="name">name:  </label>
            <input type="text" name="name" id="name" />
            <br />
            
             <div class="search-box">
                <label for="teacherid">select teacher:</label>
                <select id="id" name="class"> 
                        <?php
                            echo $teachers;
                        ?>
                </select>
            
            <input type="submit" value="Create Class" class="btn btn-primary" /> 
        </fieldset>
    </form>


    </main>
</body>
</html>
