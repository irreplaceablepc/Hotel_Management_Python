<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $pincode = $_POST["pincode"];
    $date_of_birth = $_POST["date_of_birth"];
    $user_password = $_POST["user_password"];
    $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);
    $picture = $_POST["picture"];


    $address = $_POST["address"];

    // Connect to your database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user_registration";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert user data into the database
    $sql = "INSERT INTO users (name, email, phone_number, pincode, date_of_birth, user_password, address, picture) 
            VALUES ('$name', '$email', '$phone_number', '$pincode', '$date_of_birth', '$hashed_password', '$address', '$picture')";

    if ($conn->query($sql) === TRUE) {
        // Close the database connection
        $conn->close();
        
        // Redirect to the login page
        header("Location: http://localhost/hotel_management/");
        exit; // Make sure to exit after sending the header to prevent further execution
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
