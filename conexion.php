<?php
    $db_hosting = "localhost";
    $db_user = "id18968424_root";
    $db_pass = "WorkerApp*123";
    $db_namedb = "id18968424_db_workerap";

    // Create connection
    $conn = mysqli_connect($db_hosting, $db_user, $db_pass, $db_namedb);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    ?>