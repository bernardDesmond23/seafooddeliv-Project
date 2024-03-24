
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
  
</head>
<style>
     table,th,td{
            border:1px solid black;
            border-collapse:collapse;
            padding:8px;
           
        }
        table{
            margin:auto;
            width:50%;
            margin-top:10%;
        }
        th{
            background-color:lightgreen;
        }
       body{
    
    background-color:lavender;
   
}
h1{
    text-align: center;
    font-weight: bolder;
    font-size:xx-large;
    font-family: Mukta Mahee,sans-serif;
    color: lightblue;

}
#stat{
    text-align:center;
    padding-top:5%;
    font-size:xx-large;
    font-family: Mukta Mahee,sans-serif;

}
#submit{
    border-radius:5px;
    padding:10px;
    background-color:lightgreen;
    
}
#submit a{
    display: center;
    text-decoration:none;
    font-weight:bolder;
}


</style>
<body>
    <h1>FIND THE AVAILABLE STOCKS BELOW:</h1>
    <table>
        <tr>
            <th>FISH</th>
            <th>FISH NAME</th>
            <th>FISH PRICE</th>
            <th>QUANTITY</th>
          
            <th>DELETE</th>
            <th>UPDATE</th>
        </tr>
        

        <?php
       //read operation/select
       //connecting to db
       include 'connectDB.php';
      
       $sql="SELECT * FROM fish";
       //execute query
       $result= mysqli_query($connect,$sql);
       if($result){
        //display the data
        //mysqli_fetch_assoc()
       /* $students=mysqli_fetch_assoc($result);//creates an asssociative array for the data in the database
         echo $students['first_name'];
       }*/
       while ($fish= mysqli_fetch_assoc($result)) {
        $fishID=$fish['fishID'];
        $name=$fish['Name'];
        $price=$fish['Price'];
        $quantity=$fish['Quantity'];
        
        echo" <tr>
        <td>$fishID</td>
        <td>$name</td>
        <th>$price</td>
        <td>$quantity</td>
       
        <td><button><a href='delete.php?fishID=$fishID'>DELETE</a></button></td>
        <td><button> <a href='update.php?fishID=$fishID'>UPDATE</a></button></td>
        
    </tr>";
       }//loops through row by row in the db hence displays the data present in all rows in the db
    }
?>

    
    </table>
    <div id="stat"><p>TO ADD MORE STOCK CLICK HERE:</p>
        <button id="submit"><a href="add.php">ADD STOCK</a>
        </button>
        <button id="submit"><a href="logout.php">LOG OUT</a>
        </button></div>



</body>
</html>