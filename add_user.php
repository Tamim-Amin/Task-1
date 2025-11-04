<?php
include 'config.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$phone = $_POST['phone'];

// Profile Picture
$profile_pic = "";
if(isset($_FILES['profile_pic']) && $_FILES['profile_pic']['name'] != ""){
    $profile_pic = time()."_".$_FILES['profile_pic']['name'];
    move_uploaded_file($_FILES['profile_pic']['tmp_name'], "uploads/".$profile_pic);
}

$conn->query("INSERT INTO users (first_name, last_name, dob, gender, email, password, phone, profile_pic) VALUES ('$first_name','$last_name','$dob','$gender','$email','$password','$phone','$profile_pic')");

header("Location: index.php");
?>
