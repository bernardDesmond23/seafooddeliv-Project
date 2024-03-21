<?php
$server_name='localhost';
$server_password='';
$server_user='root';
$connect=mysqli_connect($server_name,$server_user,$server_password);
if($connect){
    echo"Successful connection";
}
else{
    die(mysqli_connect_error());
}
$sql="CREATE database seafood";
$result=mysqli_query($connect,$sql);
if($result){
    echo"Database created successfully";
}
else {
    die(mysqli_error($connect));
}
?>