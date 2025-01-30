<?php
include '../db.php';

$sql = "SELECT name, votes FROM candidates";
$result = $conn->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vote Results</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Vote Results</h1>
    <canvas id="resultsChart" width="400" height="200"></canvas>

    <script>
        const data = {
            labels: <?php echo json_encode(array_column($data, 'name')); ?>,
            datasets: [{
                label: 'Votes',
                data: <?php echo json_encode(array_column($data, 'votes')); ?>,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        };

        const config = {
            type: 'bar',
            data: data,
        };

        new Chart(document.getElementById('resultsChart'), config);
    </script>
</body>
</html>
