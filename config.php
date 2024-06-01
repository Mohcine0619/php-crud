<?php
// try{
// define("HOST", "localhost");
// define("USER", "root");
// define("PASSWORD", "");
// define("DB", "Account");
// $conn = new PDO("mysql:host=".HOST.";dbname=".DB, USER, PASSWORD);
// $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// // if(!$conn) {
// //     die("Connection failed: " . mysqli_connect_error());
// // }else{
// //     echo "Connected to the database";
// // }
// }catch(PDOException $e){
//     die("Connection failed: " . $e->getMessage());
// }
$srvr = "localhost";
$usr = "root";
$pwd = "";
$db = "Account";
$con = mysqli_connect($srvr, $usr, $pwd, $db);
if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}
?>

