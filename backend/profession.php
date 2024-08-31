<?php
session_start();
include_once "./db.php";

header('Content-Type: application/json');

try {
    // SQL query to fetch people data grouped by position
    $sql = "SELECT position, COUNT(*) as count FROM people GROUP BY position";
    
    // Execute the query
    $stmt = $pdo->query($sql);

    // Initialize an array to store position counts
    $positionCounts = [];

    // Fetch the results and sum up the data
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Store the count for each position
        $positionCounts[] = [
            'position' => $row['position'],
            'count' => (int)$row['count']
        ];
    }

    // Close the connection
    $pdo = null;

    // Return the data as JSON
    echo json_encode($positionCounts);

} catch (PDOException $e) {
    // Handle any errors
    echo json_encode(['error' => $e->getMessage()]);
}
?>
