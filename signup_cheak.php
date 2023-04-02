<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connection.php';
    $name = $_POST['username'];
    $email = $_POST['Email'];
    $password = $_POST['password'];

    
    $sql = "INSERT INTO `profile` (`name`,`email`,`password`)VALUES('$name','$email','$password')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Data Inserted !!')</script>";
        echo "<script>window.open('Account.php','_self')</script>";
    }
}
?>