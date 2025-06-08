<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "login_system";

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

// Check if user exists
$sql_check = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql_check);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Update password
    $sql_update = "UPDATE users SET password = ? WHERE username = ?";
    $stmt = $conn->prepare($sql_update);
    $stmt->bind_param("ss", $new_password, $username);
    $stmt->execute();

    echo "<script>alert('Password successfully updated!'); window.location.href='index.html';</script>";
} else {
    echo "<script>alert('Username not found.'); window.location.href='forgot_password.html';</script>";
}

$conn->close();
?>
