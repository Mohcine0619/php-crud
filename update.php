<?php
require 'config.php';
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $fullName = $_POST['fullName'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $sql = "UPDATE users SET fullName = '$fullName', username = '$username', email = '$email', password = '$password', phone = '$phone', gender = '$gender' WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if($result){
        header("Location: view.php");
    }else{
        echo "<script>alert('Data Not Updated');window.location.assign('view.php');</script>";
    }
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <html>
    <head>
        <!-- Include Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <!-- Include Bootstrap JS and Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <form action="update.php" method="post" class="form-group">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" class="form-control">
            <input type="text" name="fullName" value="<?php echo $row['fullName']; ?>" class="form-control">
            <input type="text" name="username" value="<?php echo $row['username']; ?>" class="form-control">
            <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control">
            <input type="text" name="password" value="<?php echo $row['password']; ?>" class="form-control">
            <input type="text" name="phone" value="<?php echo $row['phone']; ?>" class="form-control">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="male" value="male" <?php echo ($row['gender'] == 'male') ? 'checked' : ''; ?>>
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="female" value="female" <?php echo ($row['gender'] == 'female') ? 'checked' : ''; ?>>
                <label class="form-check-label" for="female">Female</label>
            </div>
            <input type="submit" name="update" value="Update" class="btn btn-primary">
        </form>
    </body>
    </html>

<?php }?>