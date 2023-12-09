<?php
    session_start();
    if (isset($_SESSION['user_id'])) {
        $db = "id21565937_ceylon_odyssey";
        $server = "localhost";
        $username = "root";
        $pwd ="";

        $conn = new mysqli($server, $username, $pwd, $db);

        $sql = "SELECT * FROM admin
                WHERE id = {$_SESSION['user_id']}";
        $result = $conn->query($sql);
        $user = $result->fetch_assoc();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceyon Odyssey | Dashboard</title>
    <link rel="shortcut icon" href="../images/Logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
    
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ysabeau+SC&display=swap" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
</head>
<body>
    <section id="menu">
        <div class="logo">
            <img src="../images/Logo.png" alt="">
            <h2>C<span style="font-variant: small-caps">eylon</span> O<span style="font-variant: small-caps">dyssey</span></h2>
        </div>
        <div class="items">
            <li><a href="#dashboard"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pie-chart" viewBox="0 0 16 16">
                <path d="M7.5 1.018a7 7 0 0 0-4.79 11.566L7.5 7.793V1.018zm1 0V7.5h6.482A7.001 7.001 0 0 0 8.5 1.018zM14.982 8.5H8.207l-4.79 4.79A7 7 0 0 0 14.982 8.5zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
              </svg>Dashboard</a></li>
            <li><a href="#bookNow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
              </svg>Book Now Submissions</a></li>
            <li><a href="#contact"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
              </svg>Contact Submissions</a></li>
            <li><a href="#review"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-heart-fill" viewBox="0 0 16 16">
                <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15Zm0-9.007c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/></svg>Reviews</a></li>
              
        </div>
    </section>

    <section id="interface">
        <div class="navigation">
            <div class="profile">
                  <img src="../images/au_2.png"/>
                  <?php
                    if (isset($_SESSION['user_id'])) {
                        $n = htmlspecialchars($user['name']);
                        echo "&emsp;$n&emsp;";
                    }
                ?>
                     
                 <a href="../logOut.php"><button class="btn btn-outline-dark my-2 my-sm-0" style="font-family: 'Ysabeau SC', sans-serif;" type="submit">Log out</button></a>
            </div>
        </div>

       <div id="dashboard">
        <h3 class="i-name">Dashboard</h3>
        <div class="values">
            <div class="val-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                  </svg>

                <div>
                <!-- PHP code to get the toal number of new users -->
                <?php
                
                    $sql = "SELECT COUNT(*) AS total FROM user";
                    $result= $conn->query($sql);
                    $data = $result->fetch_assoc();

                    #Printing it out
                    echo ($data['total'] - 10);
                    
                ?>
                    <br/><span>Total Users</span>
                  </div>
            </div>
           
            
        </div>
       

        <div class="board">
            <table class="table table-dark table-hover" width="100%">
                <thead>
                    <tr>
                        <td colspan="3">Views</td>                      
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td>Number of views</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody style="text-align:center">
                    <?php
                        $sql = "SELECT * FROM viewcount ORDER BY date DESC";
                        $result = $conn->query($sql);

                        if($result) {
                            while ($row =  $result->fetch_assoc()) {
                                $date =$row['date'];
                                echo "<tr>";
                                echo "<td>".$row['date']."</td>";
                                echo "<td><b>".$row['view']."</b></td>";
                                echo "<td style='vertical-align: middle;'><a href='delete.php?deletedate=$date'><button class='btn btn-danger'>DELETE</button></a></td>";
                                echo"</tr>";
                            }
                        }

                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>

    <!-- BOOK NOW -->
    <div id="bookNow">
        <h3 class="i-name">Book Now Submissions</h3>
        <br/>
        <div class="board">
            <table width="100%" class="table table-dark table-hover table-responsive table-responsive-lg">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>NIC</td>
                        <td>Address</td>
                        <td>Email</td>
                        <td>Mobile</td>
                        <td>Tour Destination</td>
                        <td>Duration</td>
                        <td>No of Adults</td>
                        <td>No of Children</td>                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM booking ORDER BY id DESC";
                        $result = $conn->query($sql);

                        if($result) {
                            while ($row =  $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>".$row['fullName']."</td>";
                                echo "<td>".$row['nic']."</td>";
                                echo "<td>".$row['address']."</td>";
                                echo "<td>".$row['email']."</td>";
                                echo "<td>".$row['mobile']."</td>";
                                echo "<td>".$row['tourDestination']."</td>";
                                echo "<td>".$row['tourDuration']."</td>";
                                echo "<td>".$row['noOfAdults']."</td>";
                                echo "<td>".$row['noOfChildren']."</td>";
                                echo"</tr>";
                            }
                        }

                    ?>
                </tbody>
                </table>
        
        </div>
    </div>


    <div id="contact">
    <h3 class="i-name">Contact Form Submissions</h3>
    <br/>
        <div class="board">
            <table width="100%" class="table table-dark table-hover">
                <thead>
                    <tr>
                        <td>Customer Name</td>
                        <td>Email</td>
                        <td>Mobile</td>
                        <td>Subject</td>
                        <td>Message</td>
                        <td></td>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM contact ORDER BY id DESC";
                        $result = $conn->query($sql);

                        if($result) {
                            while ($row =  $result->fetch_assoc()) {
                                $table = "contact";
                                $id =$row['id'];
                                echo "<tr>";
                                echo "<td>".$row['firstName']." ".$row['lastName']."</td>";
                                echo "<td>".$row['cEmail']."</td>";
                                echo "<td>".$row['cPhoneNo']."</td>";
                                echo "<td>".$row['cSubject']."</td>";
                                echo "<td>".$row['cMessage']."</td>";
                                echo "<td style='vertical-align: middle;'><a href='delete.php?deleteid=$id&table=$table'><button class='btn btn-danger'>DELETE</button></a></td>";
                                echo"</tr>";
                            }
                        }

                    ?>
                </tbody>
                </table>
        
        </div>
    </div>
    <div id="review">
    <h3 class="i-name">Customer Reviews</h3>
    <br/><br/>
        <div class="board">
            <table width="100%" class="table table-dark table-hover">
                <thead>
                    <tr>
                        <td>Customer Name</td>
                        <td>Tour Name</td>
                        <td>Feedback</td>
                        <td></td>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $sql = "SELECT * FROM feedback ORDER BY id DESC";
                        $result = $conn->query($sql);

                        if($result) {
                            while ($row =  $result->fetch_assoc()) {
                                $table = "feedback";
                                $id =$row['id'];
                                echo "<tr>";
                                echo "<td>".$row['name']."</td>";
                                echo "<td>".$row['tourname']."</td>";
                                echo "<td>".$row['comments']."</td>";
                                echo "<td style='vertical-align: middle;'><a href='delete.php?deleteid=$id&table=$table'><button class='btn btn-danger'>DELETE</button></a></td>";
                                echo"</tr>";
                            }
                        }

                    ?>
                </tbody>
                </table>
        
        </div>
    </div>
    </section>

    <?php
        $conn->close();
    ?>
</body>
</html>