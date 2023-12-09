<?php
    $db = "id21565937_ceylon_odyssey";
    $server = "localhost";
    $username = "root";
    $pwd ="";

    $conn = new mysqli($server, $username, $pwd, $db);
    if ($conn->connect_error) 
        die("Connection failed.");

    if (isset($_GET['deleteid'])) {
        $id = $_GET['deleteid'];
        $t = $_GET['table'];

        $sql = "DELETE FROM $t WHERE id = $id";
        $conn->query($sql);
        header("Location: admin.php");
        exit;
    }
    
    if (isset($_GET['deletedate'])) {
        $date = $_GET['deletedate'];

        $sql = "DELETE FROM viewcount WHERE date = '$date'";
        $conn->query($sql);
        header("Location: admin.php");
        exit;
    }
  
  
?>