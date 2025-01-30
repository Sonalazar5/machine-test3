<?php
include '../db.php';

// Fetch candidate details for editing
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM candidates WHERE id=$id");
    $candidate = $result->fetch_assoc();
}

// Update candidate details
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    // Check if a new photo was uploaded
    if (!empty($_FILES['photo']['name'])) {
        $photo = $_FILES['photo']['name'];
        $target = "../assets/images/" . basename($photo);
        move_uploaded_file($_FILES['photo']['tmp_name'], $target);
        $sql = "UPDATE candidates SET name='$name', photo='$photo', description='$description' WHERE id=$id";
    } else {
        $sql = "UPDATE candidates SET name='$name', description='$description' WHERE id=$id";
    }

    if ($conn->query($sql)) {
        header('Location: dashboard.php');
        exit;
    } else {
        echo "Error updating candidate: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Candidate</title>
</head>
<body>
    <h1>Edit Candidate</h1>
    <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $candidate['id']; ?>">
        <input type="text" name="name" value="<?php echo $candidate['name']; ?>" required><br>
        <textarea name="description" required><?php echo $candidate['description']; ?></textarea><br>
        <input type="file" name="photo"><br>
        <button type="submit">Update Candidate</button>
    </form>
</body>
</html>
