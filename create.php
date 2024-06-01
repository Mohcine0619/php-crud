<?php 
require_once 'config.php';
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST["submit"])){
        $fullName = $_POST['fullName'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $phone = $_POST['phone'];
        $gender = $_POST['gender'];

        $sql = "INSERT INTO users (fullName, username, email, password, phone, gender) VALUES ('$fullName', '$username', '$email', '$password',  '$phone', '$gender')";
        $result = mysqli_query($con, $sql);
        if($result){
            echo "<script>alert('Registration successful');window.location.assign('view.php');</script>";
        }else{
            echo "<script>alert('Registration failed');window.location.assign('create.php');</script>";
        }
        $con->close();
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa; /* Light grey background */
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-primary {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <form method="POST" class="container mt-5">
        <div class="mb-3">
            <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Full Name">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        </div>
        
        <div class="mb-3">
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
        </div>
        <div class="mb-3">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                <label class="form-check-label" for="female">Female</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="submit" id="submit">Register</button>
    </form>
</body>
</html>
