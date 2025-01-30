<?php
include '../db.php';

$sql = "SELECT * FROM candidates";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Candidates</title>
</head>
<body>
    <h1>Candidates</h1>
    <ul>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <li>
                <img src="../assets/images/<?php echo $row['photo']; ?>" width="100" alt="Photo">
                <p><?php echo $row['name']; ?></p>
                <p><?php echo $row['description']; ?></p>
                <a href="vote.php?id=<?php echo $row['id']; ?>">Vote</a>
            </li>
        <?php } ?>
    </ul>
</body>
</html>
