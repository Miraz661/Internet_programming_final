<?php
    require('dbconnect.php');
    include("authenticate.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dashboard - Secured Page</title>
        <link rel="stylesheet" href="css/index.css" />
    </head>
    <body>
        <div class="form">
            <p>Welcome to Dashboard.</p>
            <p><a href="index.php">Home</a><p>
            <p><a href="logout.php">Logout</a></p>
        </div>
    </body>
</html>