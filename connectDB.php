<?php
$server='localhost';
$name='root';
$password='';
$database='seafood';
$connect=mysqli_connect($server,$name,$password,$database);
if(!$connect){
 die(mysqli_connect());
}
?>

