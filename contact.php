<?php
    $servername="localhost";
    $username="id21565937_ceylonodyssey";
    $password="db_123_CO";
    $db="id21565937_ceylon_odyssey";

    $conn = new mysqli($servername, $username, $password, $db);

    if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
    } else {
        $fname = $conn->real_escape_string($_POST['fname']);
    	$lname = $conn->real_escape_string($_POST['lname']);	
    	$mailFrom = $conn->real_escape_string($_POST['email']);
    	$tel = $conn->real_escape_string($_POST['tel']);
    	$destination = $conn->real_escape_string($_POST['destination']);
    	$message =  $conn->real_escape_string($_POST['subject']);

    	
	$sql = "INSERT INTO contact (firstName, lastName, cEmail, cPhoneNo, cDestination, cMessage) VALUES ('$fname', '$lname', '$mailFrom', '$tel', '$destination', '$message')";
	
	$conn->query($sql);
	
	$conn->close();
}
	header("Location: submit.php");

	
	
?>