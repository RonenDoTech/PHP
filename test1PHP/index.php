<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ronenDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "user_id: " . $row["user_id"]. " - username: " . $row["user_name"]. " - Password: " . $row["user_pass"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
