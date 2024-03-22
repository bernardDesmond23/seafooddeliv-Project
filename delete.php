<?php
//delete operation 
include'connectDB.php';//establish connection to db
$fishID=$_GET['fishID'];
$sql="DELETE FROM fish WHERE fishID=$fishID";
//execute query
$result=mysqli_query($connect,$sql);
if($result){
    //echo"Deleted successfully";
    //header function sends a message to the send 
    header("location:admin.php");
}
else{
    die(mysqli_error($connect));
}