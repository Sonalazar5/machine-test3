<?php
include '../db.php';

// Check if the delete action is confirmed
if (isset($_GET['id']) && isset($_GET['confirm']) && $_GET['confirm'] == 'yes') {
    $id = $_GET['id'];
    $sql = "DELETE FROM candidates WHERE id=$id";

    if ($conn->query($sql)) {
        echo "<h3>Candidate deleted successfully.</h3>";
        echo '<a href="dashboard.php">Go back to Dashboard</a>';
    } else {
        echo "<h3>Error deleting candidate: " . $conn->error . "</h3>";
        echo '<a href="dashboard.php">Go back to Dashboard</a>';
    }
    exit;
}

// If the delete action is not confirmed, show a confirmation prompt
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM candidates WHERE id=$id");
    $candidate = $result->fetch_assoc();

    if ($candidate) {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Delete Candidate</title>
        </head>
        <body>
            <h1>Delete Candidate</h1>
            <p>Are you sure you want to delete the candidate <strong><?php echo $candidate['name']; ?></strong>?</p>
            <a href="delete_candidate.php?id=<?php echo $id; ?>&confirm=yes">Yes, Delete</a>
            <a href="dashboard.php">Cancel</a>
        </body>
        </html>
        <?php
    } else {
        echo "<h3>Candidate not found.</h3>";
        echo '<a href="dashboard.php">Go back to Dashboard</a>';
    }
}
?>
