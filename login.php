
<!DOCTYPE html>
<html lang="en">
<title>yoooooooo</title>
<head>
    <link rel="stylesheet" href="css/bootstrap.css" />
    </head>
    <body>
    <?php include "header.php" ?>
    <?php include "login_functions.php" ?>
    <form action="login.php" method="post">
        <fieldset>
            <legend>login form</legend>
            <label for="username">username:  </label>
            <input type="text" name="username" id="username" />
            <br />
            <label for="password">password:  </label>
            <input type="password" name="password" id="password" />
            <br />
            <input type="submit" value="login" class="btn btn-primary" /> 
        </fieldset>
    </form>
    <br />
    <input type="button" value="Sign Up" onclick="location='signup.php'" class="btn btn-primary" />
</body>
</html>