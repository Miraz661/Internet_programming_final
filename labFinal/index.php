<?php
    include("authenticate.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Welcome Home</title>
        <link rel="stylesheet" href="css/index.css" />
    </head>
    <body>
        <div class="form">
            <p>Welcome <?php echo $_SESSION['Uname']; ?>!</p>
            <p>Welcome to my site.</p>
            <p><a href="dashboard.php">Dashboard</a></p>
            <a href="logout.php">Logout</a>
        </div>
    </body>
</html>
