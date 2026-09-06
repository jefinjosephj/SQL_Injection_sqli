<?php

$host = "mysql";
$user = "labuser";
$password = "labpass";
$database = "sqli_lab";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$username = $_POST["username"] ?? "";
$password_input = $_POST["password"] ?? "";

$sql = "SELECT id, username
        FROM users
        WHERE username = ? AND password = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password_input);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<h2>Login successful</h2>";
    echo "<p>Welcome, " . htmlspecialchars($username) . "!</p>";
} else {
    echo "<h2>Login failed</h2>";
    echo "<p>Invalid username or password.</p>";
}

$stmt->close();
$conn->close();

?>