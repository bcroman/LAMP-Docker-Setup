<?php

$host = "db";
$dbname = "mydatabase";
$username = "myuser";
$password = "mypassword";

try {
    $conn = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h1>Apache + PHP + MySQL Docker setup works!</h1>";
    echo "<p style='color: green;'>Connected to MySQL successfully using PDO.</p>";

} catch (PDOException $e) {
    echo "<h1>Database connection failed</h1>";
    echo "<p style='color: red;'>" . htmlspecialchars($e->getMessage()) . "</p>";
}

?>