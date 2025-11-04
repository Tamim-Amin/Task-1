<?php
include 'config.php';
$id = $_GET['id'];
$res = $conn->query("SELECT * FROM users WHERE id=$id");
$row = $res->fetch_assoc();
echo json_encode($row);
?>
