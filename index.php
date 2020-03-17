<?php
require 'common.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RFID Access System</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">RFID Access System</a>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="activity.php" class="nav-link">Activity Log</a>
            </li>
            <li class="nav-item">
                <a href="users.php" class="nav-link active">Users</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="col-md-6 order-md-1 text-center text-md-left pr-md-5">
            <p class="mb-3">Access System</p>
            <div class="row mx-n2">
                <div class="col-md px-2">
                    <a href="users.php" class="btn btn-lg btn-outline-secondary w-100 mb-3">Users</a>
                </div>
                <div class="col-md px-2">
                    <a href="activity.php" class="btn btn-lg btn-outline-secondary w-100 mb-3" >Activity</a>
                </div>
            </div>
        </div>
    </div>
</html>