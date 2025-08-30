<?php include "../config.php";
$name=$_POST['name']; $email=$_POST['email']; $phone=$_POST['phone']; $course=$_POST['course'];
$conn->query("INSERT INTO students(name,email,phone,course) VALUES('$name','$email','$phone','$course')");
header("Location: index.php");
