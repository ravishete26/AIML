<?php include "../config.php";
$id=$_GET['id'];
$name=$_POST['name']; $email=$_POST['email']; $phone=$_POST['phone']; $course=$_POST['course'];
$conn->query("UPDATE students SET name='$name',email='$email',phone='$phone',course='$course' WHERE id=$id");
header("Location: index.php");
