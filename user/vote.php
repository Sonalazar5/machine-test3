<?php
include '../db.php';

session_start();
$user_id = 1; // Hardcoded user ID for testing.

if (isset($_GET['id'])) {
    $candidate_id = $_GET['id'];

    $check_vote = "SELECT has_voted FROM users WHERE id='$user_id'";
    $result = $conn->query($check_vote);
    $row = $result->fetch_assoc();

    if ($row['has_voted']) {
        echo "You have already voted!";
    } else {
        $conn->query("UPDATE candidates SET votes = votes + 1 WHERE id='$candidate_id'");
        $conn->query("UPDATE users SET has_voted = 1 WHERE id='$user_id'");
        echo "Vote cast successfully!";
    }
}
?>
        