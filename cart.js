// Load dependencies
const express = require('express');
const mysql = require('mysql');

// Create a MySQL connection pool
const pool = mysql.createPool({
    host: 'localhost',
    user: 'name',
    password: 'price',
    database: 'seafood'
});

// Create an Express app
const app = express();

// Allow parsing the request body as JSON
app.use(express.json());

// Define a route for adding an item to the cart
app.post('/add-to-cart', (req, res) => {
    // Get the item details from the request body
    const { id, name, price } = req.body;

    // Execute the MySQL query to insert the item into the seafoodcart table
    pool.query('INSERT INTO seafoodcart (id, name, price) VALUES (?, ?, ?)', [id, name, price], (error, results) => {
        if (error) {
            console.error(error);
            return res.status(500).json({ message: 'An error occurred while adding the item to the cart.' });
        }

        // Return a success response
        return res.json({ message: 'Item added to cart!' });
    });
});

// Start the server
app.listen(3000, () => {
    console.log('Server is running on port 3000');
});