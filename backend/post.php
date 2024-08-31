<?php
session_start();
include_once "./db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['full_name']) && isset($_POST['gender']) && isset($_POST['position'])) {
    $full_name = $_POST['full_name'];
    $gender = $_POST['gender'];
    $position = $_POST['position'];

    // Define the valid gender options as per the ENUM values in the database
    $gender_map = [
        'm' => 'Male',
        'f' => 'Female',
        'n' => 'Prefer Not to say'
    ];
    // Define the valid position options as per the ENUM values in the database
    $position_map = [
        'd' => 'Doctor',
        'f' => 'Nurse',
        'e' => 'Engineer',
        'j' => 'Journalist',
        'sw' => 'Social Worker',
        't' => 'Teacher'
    ];

    // Map the abbreviated values to full names
    $gender = isset($gender_map[$gender]) ? $gender_map[$gender] : null;
    $position = isset($position_map[$position]) ? $position_map[$position] : null;

    // Prepare and execute the SQL statement
    $sql = "INSERT INTO people (full_name, gender, position) VALUES (:full_name, :gender, :position)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'full_name' => $full_name,
        'gender' => $gender,
        'position' => $position
    ]);

    // Check if the statement executed successfully
    if ($stmt) {
        header("Location:../index.php?message=New entry added successfully");
        exit();
    } else {
        header("Location:../index.php?error=Error adding entry!");
        exit();
    }
} else {
    header("Location:../index.php?error=All fields are required!");
    exit();
}
