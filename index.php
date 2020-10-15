<?php
if(isset($_POST["Submit1"])){

 $name=$_POST['name'];
 
 $email=$_POST['email'];

 $company =$_POST['company'];
 
 $location =$_POST['location'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	
}
$sql = "INSERT INTO formsample  (name,email,company,location)
VALUES ('$name','$email','$company','$location')";
if ($conn->query($sql) === TRUE) {
   header("");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <!-- Font Icon -->

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #FF0000;">

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        
                        <div class="form-group">
                            <input type="text" class="form-input"  name="name" id="name" placeholder=" Name" required >
                        </div>
						<!--<div class="form-group">
                            <input type="text" class="form-input" name="title" id="title" placeholder=" Title" required >
                        </div>-->
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  required >
                        </div>
						
					 <!-- <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                        </div>-->
						  <div class="form-group">
                            <input type="text" class="form-input" name="company" id="company" placeholder="Company" required >
                        </div>
						<div class="form-group">
                            <input type="text" class="form-input" name="location" id="location" placeholder="Location" required >
                        </div>
                       
                        <div class="form-group">
                            <input type="submit" name="Submit1" id="submit" class="form-submit" value="Submiting"/>
                        </div>
                    </form>
                    
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
