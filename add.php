<?php
include 'connectDB.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $fname=$_POST['name'];
    $price=$_POST['number'];
    $quantity=$_POST['quantity'];
    $sql="INSERT INTO fish (Name,Price,Quantity) VALUES ('$fname',$price,$quantity)";
    $result=mysqli_query($connect,$sql);
    if($result){
  
       header("location:admin.php");
    }
    else {
        die(mysqli_error($connect));
    }


}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
    
</head>
<body>
    <div class="signup">
      
   <form class="sign" method="post">
   
    <h2 class="stat">ADD STOCK</h2>
   <label for="username">Fish Name</label><br>
    <input type="text" name="name"><br>
    <label>PRICE:</label><br>
    <input type="number" name="number"><br>
    <label for="qunatity">QUANTITY:</label><br>
    <input type="number" name="quantity"><br>
    <br>
    <input type="submit" value="ADD STOCK" name="submit">
</form>
</div>

</body>
</html>