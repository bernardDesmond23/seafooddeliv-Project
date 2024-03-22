<?php

include'connectDB.php';
$fishID=$_GET['fishID']; 
$mysql= "SELECT * FROM fish WHERE fishID=$fishID";
$result=mysqli_query($connect,$mysql);
if($result){
    $fish=mysqli_fetch_assoc($result);
    $fishID=$fish['fishID'];
        $name=$fish['Name'];
        $price=$fish['Price'];
        $quantity=$fish['Quantity'];

}
if($_SERVER['REQUEST_METHOD']=='POST'){

    $name=$_POST['name'];
    $price=$_POST['number'];
    $quantity=$_POST['quantity'];
    $sql= "UPDATE fish SET Name='$name',Price=$price,Quantity=$quantity WHERE fishID=$fishID";
    //execute query
    $result=mysqli_query($connect,$sql);
    if($result){
        echo"Updated Succesfully";
        header("location:admin.php");
    }
    else{
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
   
    <h2 class="stat">UPDATE STOCK</h2>
   <label for="username">Fish Name</label><br>
    <input type="text" name="name" value="<?php echo $name;?>"><br>
    <label>PRICE:</label><br>
    <input type="number" name="number" value="<?php echo $price;?>"><br>
    <label for="qunatity">QUANTITY:</label><br>
    <input type="number" name="quantity" value="<?php echo $quantity;?>"><br>
    <br>
    <input type="submit" value="UPDATE STOCK" name="submit">
</form>
</div>

</body>
</html>