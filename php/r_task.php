<?php
session_start();
include "db.php";

if (!isset($_SESSION["user_id"]))
    die("Don't know how you got here but log in first!");
$user_id = $_SESSION["user_id"];
$stmt = $conn->prepare("SELECT id, task, date_due, status FROM todos WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Task ID</th>
                <th>Task</th>
                <th>Date Due</th>
                <th>Status</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['task'] . "</td>
                <td>" . $row['date_due'] . "</td>
                <td>" . $row['status'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No tasks found.";
}
$stmt->close();
$conn->close();
?>
