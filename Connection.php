 <?php
 $server="localhost";
 $username="root";
 $password="";
 $database="ecommerceusers";
 $conn=mysqli_connect($server,$username,$password,$database);
 if($conn)
 {
     echo 'sucess';
 }
 else {
    die("Error".mysqli_connect_error());
 }
 function Select_Record($sql,$conn)
 {
     if($conn->query($sql)==TRUE){
         $result = $conn->query($sql);
 		return $result;
    }
    else
    echo "error message";
}
         ?>
