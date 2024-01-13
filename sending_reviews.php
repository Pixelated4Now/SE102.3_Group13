<?php
    $db = "id21565937_ceylon_odyssey";
	$server = "localhost";
	$username = "root";
	$pwd ="";

	$conn = new mysqli($server, $username, $pwd, $db);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} else {
	$name = $_REQUEST['fullname'];
	$tourname = $_REQUEST['name_of_tour'];
	$comments = trim($_REQUEST['comments']);
	
	$sql = "INSERT INTO feedback (name, tourname, comments) VALUES ('$name', '$tourname', '$comments')";
	
	$conn->query($sql);
	
	$conn->close();
}

	
header("Location: customer_reviews.php");
?>

