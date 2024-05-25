<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $user_password = $_POST["user_password"];

    // Database connection
    $servername = "localhost";
    $username = "root";
    $db_password = ""; // Enter your database password here
    $dbname = "user_registration"; // Enter your database name here

    $conn = new mysqli($servername, $username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to retrieve user data based on email
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // User found, verify password
        $row = $result->fetch_assoc();
        if (password_verify($user_password, $row['user_password'])) {
            // Password is correct
            // Store user data in session or cookie
            session_start();
            $_SESSION['id'] = $row['id']; // Assuming you have a 'user_id' column in your 'users' table
            $_SESSION['email'] = $row['email']; // Store other user data as needed
            $_SESSION['phone_number'] = $row['phone_number'];
            $_SESSION['name'] = $row['name'];
            // Redirect to dashboard or home page
            header("Location: http://localhost/hotel_management/include/rooms1.php"); // Change "rooms1.html" to your desired page
            exit;
        } else {
            // Password is incorrect
            echo "Invalid password";
        }
    } else {
        // User not found
        echo "User not found";
    }

    $conn->close();
}
?>
