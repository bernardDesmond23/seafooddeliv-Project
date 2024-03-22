<?php
include'connectDB.php';
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $telcontact=$_POST['number'];
    $location=$_POST['location'];
    $password_hash=password_hash($password, PASSWORD_DEFAULT);
    $sql="INSERT INTO customers(Username,Password,Telephone_contact,Location) VALUES ('$username','$password_hash',$telcontact,'$location')";
    $result=mysqli_query($connect,$sql);
    if($result){
        echo"Registered successfully";
        header("location:login.php");
    }
    else{
        die(mysqli_error($connect));
    }
}

?>