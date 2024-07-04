<?php
include 'db.php';

if ($_SERVER[$REQUEST_METHOD] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $sex = $_POST["sex"];
    $password = $_POST["password"];
    $pass = password_hash($password, PASSWORD_DEFAULT);
    if (empty($username) || empty($pass) || empty($email) || empty($sex)) {
        echo "All fields are required\n";
        exit;
    }
    $stmt = $conn->prepare("INSERT INTO user(username, email, password, sex) VALUES(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $email, $pass, $sex);
    if ($stmt->execute())
        echo "Registration Complete!\n";
    else
        die("Registration failed . . .!\n"  . $stmt.error);
    $stmt->close();
    $conn->close();
}
?>
<!-- /Documents/PERSO/Training_arc/academics/register.html /var/www/html/
sudo cp /home/divin/Documents/PERSO/Training_arc/academics/register.php /var/www/html/
sudo cp /home/divin/Documents/PERSO/Training_arc/academics/db.php /var/www/html/ -->

