<?php
include('config.php');
$order_id_client = $_GET['orderid'];

// Prepare the query
$query = "DELETE FROM winkle WHERE orderid = :orderid";
$stmt = $con->prepare($query);

// Bind parameters
$stmt->bindParam(':orderid', $order_id_client, PDO::PARAM_INT);

// Execute the query
$stmt->execute();

header('location: naarmand.php');
?>