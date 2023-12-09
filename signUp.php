<?php
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $db = "id21565937_ceylon_odyssey";
            $server = "localhost";
            $username = "root";
            $pwd ="";
        
            $n = $_POST['name'];
            $e = $_POST['email'];
            $p = $_POST['password'];
        
            $conn = new mysqli($server, $username, $pwd, $db);
        
            $sql = "INSERT INTO user (uname, uemail, upassword) VALUES ('$n', '$e', '$p')";
            $conn -> query($sql);
            header("Location: index.html");
            exit;
        }
?>