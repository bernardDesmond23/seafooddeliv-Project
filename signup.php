<?php
include "connectDB.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the required input fields are set
    if (isset($_POST['username'], $_POST['password'], $_POST['number'], $_POST['location'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $telcontact = $_POST['number'];
        $location = $_POST['location'];
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        // Update the SQL query by adding single quotes around the variables
        // Also, consider using prepared statements instead of injecting variables into the query directly for better security
        $sql = "INSERT INTO customers (Username, Password, Telephone_contact, Location) 
                VALUES ('$username', '$password_hash', '$telcontact', '$location')";

        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo "Registered successfully";
            header("Location: login.php");
            exit;
        } else {
            die(mysqli_error($connect));
        }
    } else {
        echo "All input fields are required.";
    }
}
?>