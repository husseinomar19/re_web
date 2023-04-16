<?php
include('config.php');
$wei = $_GET['reid'];

// Prepare the query
$query = "DELETE FROM reserveren WHERE id = :wei";
$stmt = $con->prepare($query);

// Bind parameters
$stmt->bindParam(':wei', $wei, PDO::PARAM_INT);

// Execute the query
$stmt->execute();

header('location: re1.php');
?>