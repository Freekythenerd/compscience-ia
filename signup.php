<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="web programming :: assignment 2" />
    <meta name="keywords" content="web, programming" />

    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="forms.css" />
    <link rel="stylesheet" href="main.css" />

    <title>gang</title>
</head>
<body>
    <?php include "header.php"; ?>

    <main class="container lead">
    <form action="signup.php" method="post">
        <fieldset>
            <legend>Signup form</legend>
            <label for="username">username:  </label>
            <input type="text" name="username" id="username" />
            <br />
            <label for="password">password:  </label>
            <input type="password" name="password" id="password" />
            <br />
            <input type="submit" value="Create Account" class="btn btn-primary" /> 
        </fieldset>
    </form>

    <?php include "signup_functions.php" ?>
    </main>
</body>
</html>
