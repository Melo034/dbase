<?php
session_start();
include_once "./db.php";

header('Content-Type: application/json');

try {
    // SQL query to fetch total count grouped by gender
    $sql = "SELECT gender, COUNT(*) as count FROM people GROUP BY gender";
    
    // Execute the query
    $stmt = $pdo->query($sql);

    // Initialize an array to store the results
    $genderCounts = [];

    // Fetch the results and store the data
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Store the count for each gender
        $genderCounts[] = [
            'gender' => $row['gender'],
            'count' => (int)$row['count']
        ];
    }

    // Close the connection
    $pdo = null;

    // Return the data as JSON
    echo json_encode($genderCounts);

} catch (PDOException $e) {
    // Handle any errors
    echo json_encode(['error' => $e->getMessage()]);
}
?>
