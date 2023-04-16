<?php
include('config.php');
$ID = $_GET['id'];
$stmt = $con->prepare("DELETE FROM heertgerechten WHERE id=:id");
$stmt->bindParam(":id", $ID);
$stmt->execute();

header('location: verwijderen.php');

?>
