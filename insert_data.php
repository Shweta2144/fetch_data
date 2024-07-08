<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    $sql = "INSERT INTO MyGuests (firstname, lastname) VALUES ('$firstname', '$lastname')";

    if ($conn->query($sql) === TRUE) {
        // Fetch updated table data
        include 'fetch_data.php';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // $conn->close();
}
?>
