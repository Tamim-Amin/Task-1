<?php
include 'config.php';

$id = $_GET['id'];
$res = $conn->query("SELECT profile_pic FROM users WHERE id=$id");
$row = $res->fetch_assoc();
if($row['profile_pic'] != "") unlink("uploads/".$row['profile_pic']);

$conn->query("DELETE FROM users WHERE id=$id");
header("Location: index.php");
?>
