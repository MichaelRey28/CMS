<?php
session_start(); // Start the session

// Include the database connection
include 'config.php'; // Ensure the path is correct

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and execute the query using MySQLi
    $stmt = $conn->prepare("SELECT * FROM account WHERE user = ? AND pass = ?");
    $stmt->bind_param("ss", $username, $password); // "ss" means two string parameters

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Successful login
        $_SESSION['loggedin'] = true;
        header("Location: admin_dashboard.php");
        exit;
    } else {
        // Invalid credentials
        echo "Invalid username or password";
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
