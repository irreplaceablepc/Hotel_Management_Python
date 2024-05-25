<?php
session_start();

// Check if the user is logged in
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['id'])) {
    // Get user details from the session
    $userId = $_SESSION['id'];
    $userName = $_POST['full_name'];
    $userMobile = $_POST['mobile_number'];
    $room_name = $_POST['room_name'];
    $no_adult = $_POST['no_adult'];
    $no_child = $_POST['no_child'];
    $no_room = $_POST['no_room'];
    // Additional user details can be retrieved similarly
    
    // Connect to the database (replace with your actual database credentials)
    $pdo = new PDO('mysql:host=localhost;dbname=user_registration', 'root', '');
    
    // Prepare SQL statement to insert booking details into the database
    $stmt = $pdo->prepare("INSERT INTO book_hotel (user_id, full_name, mobile_number, room_name, no_adult, no_child, no_room) VALUES (:user_id, :full_name, :mobile_number, :room_name, :no_adult, :no_child, :no_room)");
    $stmt->bindParam(':user_id', $userId);
    $stmt->bindParam(':full_name', $userName);
    $stmt->bindParam(':mobile_number', $userMobile);
    $stmt->bindParam(':room_name', $room_name);
    $stmt->bindParam(':no_adult', $no_adult);
    $stmt->bindParam(':no_child', $no_child);
    $stmt->bindParam(':no_room', $no_room);
    
    // Execute the SQL statement
    $stmt->execute();
    
    // Provide feedback to the user
    echo "Booking successful!";
} else {
    // If user is not logged in, redirect to the login page
    header("Location: login.php");
    exit(); // Make sure to stop further execution
}
?>
