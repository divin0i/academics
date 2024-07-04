<?php
session_start();
include "db.php";

if(!isset($_SESSION["user_id"]))
    die("Don't know how you got here but log in first !");
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $task_id = $_POST["task_id"];
    $user_id = $_SESSION["user_id"];
    if (empty($task_id)) {
        echo "Select the Task to delete!";
        exit;
    }
    $stmt = $conn->prepare("DELETE FROM todos WHERE id =? AND user_id =?");
    $stmt->bind_param("ii", $task_id, $user_id);
    if ($stmt->execute()) {
        echo "Task deleted successfully...";
    } else {
        die("Error deleting task. Try again: " . $stmt->error);
    }
    $stmt->close();
    $conn->close();
}
?>