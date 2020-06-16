<header>
        <nav class="navbar navbar-expand navbar-dark bg-dark sticky-top">
            <a href="index.php" class="navbar-brand">Teacher Class Manager</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="dashboard.php" class="nav-link">Dashboard</a></li>
                <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
 <?php
    if (isset($_SESSION["id"])) { // check if user is logged in
        echo '<li class="nav-item"><a href="studentmaintenance.php" class="nav-link">Student Maintenance</a></li>';
        echo '<li class="nav-item"><a href="classmaintenance.php" class="nav-link">Class Maintenance</a></li>';
        echo '<li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>';
        echo "<p>you are logged in</p>";
        }
       else {
}
?>
                
            </ul>
        </nav>
    </header>