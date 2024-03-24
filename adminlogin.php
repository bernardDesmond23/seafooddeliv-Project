<?php
include"connectDB.php";
$unsuccess=0;
$success=0;
if ($_SERVER['REQUEST_METHOD']=='POST') {
  $username=$_POST['username'];
  $password=$_POST['password'];
  $ccpassword="bejo123";
  $sql="SELECT * FROM customers WHERE username='$username'";
  $result=mysqli_query($connect,$sql);
  if($result){
     //check if there is any record from executing the query
  //my_sql_num_rows() counts the number of rows produced in the db or checks the records in the rows of the db
  //if the rows are greater than 0 then the enmail exists

    if(mysqli_num_rows($result)>0){
       //check if passwords match 
       //fetch the password hash from db
       $account=mysqli_fetch_assoc($result);//fetchs the data in the table from the database
       $password_hash=$account['Password'];
       //password_verify() comapres the hashed password in db with the password the user has given or inputed 
       //if they match it return true and if they dont then false is returned
       //seesions are a way to store user data accross multiple pages in variables
       if(password_verify($password,$password_hash)){
        $success=1;
        session_start();//start user session
        $_SESSION['username']=$username;//the variable $_seesion stores the user email and can be used accross multiple pages in the app
        $_SESSION['id']=$account['id'];//the variable $_seesion stores the user id and can be used accross multiple pages in the app
      header("location:shop.html");
       }
       else{
        $unsuccess=1;
       }
       if($ccpassword==$password){
        header("location:admin.php");
       }

    }
  }
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN IN </title>
    <link rel="stylesheet" href="signup.css">
    <style>
        .error{
    color:red;
    font-weight: bolder;
    font-size:medium;
    font-family: Mukta Mahee,sans-serif;
    text-align:center;
  }
    </style>
</head>
<body>
<nav>
        <ul class="menu">
        <li><a href="home.html">Home</a></li>
        <li><a href="About US.html">About US</a></li>
        <li><a href="shop.html">Shop</a></li>
        <li><a href="form1.html">Contact Us</a></li>
        <li><a href="signup.html">Register</a></li>
        

        </ul>
    </nav>

<div class="signup">
      
      <form class="sign" method="post">
      
       <h2 class="stat">SIGN IN </h2>
      
      <label for="username">Username</label><br>
       <input type="text" name="username"><br>
       <label for="password">Password</label><br>
       <input type="password" name="password"><br>
       
       
  <?php 
  if ($unsuccess) {
    echo"<div class='error'> Invalid Login</div>";
  }
  if($success){
    echo"<div class='error>Login successful</div>";
  }
  ?>
       <input type="submit" value="SIGN IN " name="submit">
       <p class="luck">DON`T HAVE AN ACCOUNT <a href="signup.html">SIGN IN </a></p>
   </form>
   </div>
</body>
</html>