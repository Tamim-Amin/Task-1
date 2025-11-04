<?php
include 'config.php';

$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];

if(isset($_FILES['profile_pic']) && $_FILES['profile_pic']['name'] != ""){
    $profile_pic = time()."_".$_FILES['profile_pic']['name'];
    move_uploaded_file($_FILES['profile_pic']['tmp_name'], "uploads/".$profile_pic);
    $conn->query("UPDATE users SET profile_pic='$profile_pic' WHERE id=$id");
}

$conn->query("UPDATE users SET first_name='$first_name', last_name='$last_name', dob='$dob', gender='$gender', email='$email', phone='$phone' WHERE id=$id");

header("Location: index.php");
?>
