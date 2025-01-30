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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .dashboard-container {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        .dashboard-container h1 {
            font-size: 28px;
            color: #333333;
            margin-bottom: 20px;
        }

        .dashboard-container a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            color: #ffffff;
            background-color: #007bff;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .dashboard-container a:hover {
            background-color: #0056b3;
        }

        .dashboard-container a:last-child {
            background-color: #dc3545;
        }

        .dashboard-container a:last-child:hover {
            background-color: #b02a37;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h1>Welcome to Admin Dashboard</h1>
        <a href="add.php">Add Candidate</a>
        <a href="viewresults.php">View Results</a>
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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .dashboard-container {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        .dashboard-container h1 {
            font-size: 28px;
            color: #333333;
            margin-bottom: 20px;
        }

        .dashboard-container a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            color: #ffffff;
            background-color: #007bff;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .dashboard-container a:hover {
            background-color: #0056b3;
        }

        .dashboard-container a:last-child {
            background-color: #dc3545;
        }

        .dashboard-container a:last-child:hover {
            background-color: #b02a37;
        }
    </style>
</head>
<body>
   
</body>
</html>

    </div>
</body>
</html>
