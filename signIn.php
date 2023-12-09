<?php

    $isInvalid = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $db = "id21565937_ceylon_odyssey";
        $server = "localhost";
        $username = "root";
        $pwd ="";
    
        $conn = new mysqli($server, $username, $pwd, $db);
        $sql = sprintf("SELECT * FROM admin
                        WHERE email = '%s'",
                        $conn->real_escape_string($_POST['email']));
        
        $result = $conn->query($sql);
        $user = $result->fetch_assoc();

        if ($user) {
            if ($_POST['password'] === $user["password"]) {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                header("Location: admin/admin.php");
                exit;
            }

        } else {
            $sql = sprintf("SELECT * FROM user
                        WHERE uemail = '%s'",
                        $conn->real_escape_string($_POST['email']));
        
            $result = $conn->query($sql);
            $user = $result->fetch_assoc();
            
            if ($user) {
                if ($_POST['password'] === $user["upassword"]) {
                    session_start();
                    $_SESSION['user_id'] = $user['uid'];
                    header("Location: index.php");
                    exit;
                }
             }
        }
        $isInvalid = true;

    }
?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="A tour package website. SE102.3 project by Group 13 of batch 23.1.">
	<meta name="Keywords" content="Website, Tour packages, NSBM, SE102.3, Sri Lanka, Travel, Holiday, Explore, Tour">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
    Ceylon Odyssey | Log In</title>
	 <link rel="shortcut icon" href="images/Logo.png">
	 <link rel="preconnect" href="https://fonts.googleapis.com">
	 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	 <link href="https://fonts.googleapis.com/css2?family=Ysabeau&family=Ysabeau+SC:wght@500&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
<link href="style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </head>
	<body style="text-align: center; padding-top: 5px">
	<div class="container-fluid">
	  <div class="container">
		  
		  <img src="images/Logo.png" width="190"/>
		  
		  <div class="py-2">
      <div class="container">
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Log In</h4>
                    </div>
                    <?php
                        if ($isInvalid)
                            echo "<strong style='color:red'>Invalid login. Please try again.</strong>";
                    ?>
                    <div class="card-body">
                    <form method="post">
						
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input name ="email" type="email" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" value ="<?= htmlspecialchars($_POST['email'] ?? "") ?>" required>
                            
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
                        </div>
            
                        <button type="submit" class="btn btn-success">Log in</button>
						<br/>
						Don't have an account? Create one <a href="signUp.html">now</a>!
                        </form>
                    </div>
                </div>
      
            </div>
        </div>
    </div>
    </div>
		  
		</div>
	</div>
	</body>
</html>