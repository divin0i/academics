<?php
session_start();
include "db.php";
include "email_handler.php";

if (!isset($_SESSION["user_id"])) {
    die("Don't know how you got here but log in first!");
}

if (isset($_GET['id'])) {
    $task_id = $_GET['id'];
    $stmt = $conn->prepare("SELECT task, date_due, status FROM todos WHERE id = ? AND user_id = ?");
    $stmt->bind_param("ii", $task_id, $_SESSION["user_id"]);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $task = $result->fetch_assoc();
    } else {
        die("Task not found or you don't have permission to edit this task.");
    }

    $stmt->close();
} else {
    die("No task ID provided.");
}
?>