<?php
include '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $photo = $_FILES['photo']['name'];
    $target = "../assets/images/" . basename($photo);

    move_uploaded_file($_FILES['photo']['tmp_name'], $target);

    $sql = "INSERT INTO candidates (name, photo, description) VALUES ('$name', '$photo', '$description')";
    $conn->query($sql);

    header('Location: dashboard.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Candidate</title>
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

        .form-container {
            background-color: #ffffff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        .form-container h1 {
            font-size: 24px;
            color: #333333;
            margin-bottom: 20px;
        }

        .form-container input,
        .form-container textarea,
        .form-container button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-container textarea {
            resize: none;
            height: 100px;
        }

        .form-container button {
            background-color: #5cb85c;
            color: #ffffff;
            border: none;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }

        .form-container button:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Add Candidate</h1>
        <form method="POST" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Candidate Name" required><br>
            <textarea name="description" placeholder="Candidate Description" required></textarea><br>
            <input type="file" name="photo" required><br>
            <button type="submit">Add Candidate</button>
        </form>
    </div>
</body>
</html>
