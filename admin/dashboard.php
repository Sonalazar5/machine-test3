<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome to Admin Dashboard</h1>
    <a href="add.php">Add Candidate</a> |
    <a href="view.php">View Results</a> |
    <a href="delete.php">Delete Results</a> |
    <a href="edit.php">edit Results</a> |

    
</body>
</html>
