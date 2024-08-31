<?php
session_start();
include_once "./db.php";

header('Content-Type: application/json');

try {
    // SQL query to fetch gender data by position
    $sql = "SELECT position, 
                   SUM(CASE WHEN gender = 'Male' THEN 1 ELSE 0 END) as Male, 
                   SUM(CASE WHEN gender = 'Female' THEN 1 ELSE 0 END) as Female,
                   SUM(CASE WHEN gender = 'Prefer Not to say' THEN 1 ELSE 0 END) as PreferNotToSay
            FROM people
            GROUP BY position";
    
    // Execute the query
    $stmt = $pdo->query($sql);

    // Fetch the results and prepare the data
    $data = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $data[] = [
            'position' => $row['position'],
            'Male' => (int)$row['Male'],
            'Female' => (int)$row['Female'],
            'PreferNotToSay' => (int)$row['PreferNotToSay']
        ];
    }

    // Close the connection
    $pdo = null;

    // Return the data as JSON
    echo json_encode($data);

} catch (PDOException $e) {
    // Handle any errors
    echo json_encode(['error' => $e->getMessage()]);
}
