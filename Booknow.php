<?php
    $servername="localhost";
    $username="id21565937_ceylonodyssey";
    $password="db_123_CO";
    $db="id21565937_ceylon_odyssey";


    $conn = new mysqli($servername, $username, $password, $db);

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $fname=$_POST['fname'];
        $nic=$_POST['lname'];
        $address=$_POST['add'];
        $email=$_POST['lastname'];
        $mobile=$_POST['Mobile'];
        $tourdes=$_POST['TourDestination'];
        $duration=$_POST['duration'];
        $trvelAdult=$_POST['trvelAdult'];
        $travelKids=$_POST['travelKids'];
        
            
        $sql="INSERT INTO booking(fullName, nic, address, email, mobile, tourDestination, tourDuration, noOfADults, noOfChildren) VALUES('$fname','$nic', '$address','$email','$mobile','$tourdes','$duration','$trvelAdult','$travelKids')";
        
        
        $conn->query($sql);
        
    }

    $conn->close();

    header("Location: submit.php");
?>
