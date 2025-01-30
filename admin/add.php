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
</head>
<body>
    <h1>Add Candidate</h1>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Name" required><br>
        <textarea name="description" placeholder="Description" required></textarea><br>
        <input type="file" name="photo" required><br>
        <button type="submit">Add Candidate</button>
    </form>
</body>
</html>
