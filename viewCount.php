<?php
    $servername = "localhost";
    $username = "id21565937_ceylonodyssey";
    $password = "db_123_CO";
    $dbname = "id21565937_ceylon_odyssey";
    // Connect to MySQL
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Get the current date
    $currentDate = date('Y-m-d');

    // Check if a record for the current date exists
    $result = $conn->query("SELECT * FROM viewcount WHERE date = '$currentDate'");

    if ($result->num_rows > 0) {
        // If the record exists, update the view count
        $conn->query("UPDATE viewcount SET view = view + 1 WHERE date = '$currentDate'");
    } else {
        // If the record doesn't exist, insert a new one
        $conn->query("INSERT INTO viewcount (date, view) VALUES ('$currentDate', 1)");
    }


    $conn->close();
?>
