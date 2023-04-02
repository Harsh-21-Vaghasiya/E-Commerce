<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {


    include 'connection.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "Select * from profile WHERE email='$email'";
    $result=mysqli_query($conn,$sql);
    $data=mysqli_num_rows($result);
    $result4 = mysqli_fetch_assoc($result);


    if ($data==1) {
        echo "<script>alert('Sucessfully Login !!')</script>";
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['name'] = $result4['name'];

        echo "<script>window.open('products.php','_self')</script>";

    }
}



?>