<?php
session_start();
include "db.php";
include "email_handler.php"; // Include the email handler

if (!isset($_SESSION["user_id"])) {
    die("Don't know how you got here but log in first!");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task = $_POST["task"];
    $date_due = $_POST["date_due"];
    $status = $_POST["status"];
    $user_id = $_SESSION["user_id"];
    $user_email = $_SESSION["email"]; // Assuming email is stored in session

    if (empty($task) || empty($date_due)) {
        echo "Task and Date are Required!";
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO todos (task, date_due, status, user_id) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $task, $date_due, $status, $user_id);

    if ($stmt->execute()) {
        echo "Task created successfully...";
        // Send email notification
        $subject = "New Task Created";
        $body = "A new task <b>$task</b> has been created and is due on <b>$date_due</b>.";
        sendReminderEmail($user_email, $subject, $body);
    } else {
        die("Failed to create task: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();
}
?>
