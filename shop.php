<?php
//prevent user from accessing the page without loggging in 
session_start();
if (!isset($_SESSION['username'],$_SESSION['id'])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="shop.css">
</head>
<body>
    <nav>
        <ul class="menu">
        <li><a href="home.html">Home</a></li>
        <li><a href="About US.html">About US</a></li>
        <li><a href="shop.html">Shop</a></li>
        <li><a href="form1.html">Contact </a></li>
        <li><a href="signup.html">Register</a></li>
        

        </ul>
    </nav>
    <header>
        <img src="shop.jpeg" alt="Seafood Background" id="background-image">
        <h1>BEJO SEA FOOD DELIVERY</h1>
    </header>
   
    <main>
    
        <div class="gallery">
            <div class="item">
                <img src="jumbo-prawns-300x300.jpg" alt="Jumbo Prawns">
                <p> Name:Jumbo Prawns</p>
                <p>Price:1000ksh</p>
                <button class="add-to-cart" data-name="Jumbo Prawns" data-price="1000ksh">Add to Cart</button>
            </div>
            <div class="item">
                <img src="red-snapper-300x300.jpg" alt="Red Snapper">
                <p>Name:Red Snapper</p>
                <p>Price:750ksh</p>
                <button class="add-to-cart" data-name="Jumbo Prawns" data-price="1000ksh" >Add to Cart</button>
            </div>
            <div class="item">
                <img src="Calamari-Squid-300x300.jpeg" alt="Calamari Squid">
                <p>Name: Calamari Squid</p>
                <p>Price:2500ksh</p>
                <button class="add-to-cart" data-name="Calamari Squid" data-price="2500ksh">Add to Cart</button>
            </div>
            <div class="item">
                <img src="Parrot-Fish-300x300.jpeg" alt="Parrot Fish">
                <p id="name">Name:Parrot Fish</p>
                <p id="price">Price:950ksh</p>
                <button class="add-to-cart" data-name="Parrot Fish" data-price="950ksh">Add to Cart</button>
            </div>
            <div class="item">
                <img src="fresh-octopus-300x300.jpeg" alt="Fresh Octopus">
                <p>Name:Fresh Octopus</p>
                <p>Price:1500ksh</p>
                <button class="add-to-cart" data-name="Fresh Octopus" data-price="1500ksh">Add to Cart</button>
            </div>
            <div class="item">
                <img src="CRABS-300x300.jpg" alt="Crabs">
                <p>Name:Crabs</p>
                <p>Price:2500ksh</p>
                <button class="add-to-cart" data-name="Crabs" data-price="2500ksh">Add to Cart</button>
            </div>
            <!-- Add more gallery items -->
            
        </div>
        <a href="cart.html"><button class="view-cart">View Cart</button></a>
    </main>

    <script>
        // Get the gallery items
var items = document.querySelectorAll('.item');

// Add event listeners to each add-to-cart button
items.forEach(function (item) {
    var button = item.querySelector('.add-to-cart');
    button.addEventListener('click', function () {
        var image = item.querySelector('img').src;
        var name = button.dataset.name;
        var price = button.dataset.price;
        addToCart(image, name, price);
    });
});

// Function to add an item to the cart
function addToCart(image, name, price) {
    var cart = localStorage.getItem('cart') ? JSON.parse(localStorage.getItem('cart')) : [];
    var item = {
        image: image,
        name: name,
        price: price
    };
    cart.push(item);
    localStorage.setItem('cart', JSON.stringify(cart));
}

   </script>  

</body>
</html>