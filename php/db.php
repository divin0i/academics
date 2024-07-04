<?php
$servername = "localhost";
$username = "divin";
$pass = "hpl1510";
$dbname = "school";

$conn = new mysqli($servername, $username, $pass, $dbname);
if($conn->connect_error)
    die("failed to connetct\n" . $conn->connect_error);
echo "connection established\n";
?>
