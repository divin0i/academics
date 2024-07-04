<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
    <nav>
        <ul>
            <li><a href="r_task.php">View Tasks</a></li>
            <li><a href="c_task.html">Create Task</a></li>
            <li><a href="u_task.html?id=1">Update Task</a></li>
            <li><a href="d_task.html">Delete Task</a></li>
        </ul>
    </nav>
</body>
</html>
