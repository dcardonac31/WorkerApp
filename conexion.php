<?php
    $db_hosting = "127.0.0.1";
    $db_user = "root";
    $db_pass = "";
    $db_namedb = "db_workerapp";

    // Create connection
    $conn = mysqli_connect($db_hosting, $db_user, $db_pass, $db_namedb);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    ?>