<?php
require 'config.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if($result){
        header("Location: view.php");
    }else{
        echo "<script>alert('Data Not Deleted');window.location.assign('view.php');</script>";
    }
}
