<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'student') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>
</head>
<body>
    <h1>Welcome to Your Dashboard</h1>
    <ul>
        <li><a href="submit_assignment.php">Submit Assignment</a></li>
        <li><a href="view_grades.php">View Grades</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>
