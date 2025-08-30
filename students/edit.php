<?php include "../config.php";
$id=$_GET['id']; 
$res=$conn->query("SELECT * FROM students WHERE id=$id");
$data=$res->fetch_assoc();
?>
<form method="post" action="update.php?id=<?=$id?>">
  <h2>Edit Student</h2>
  <input name="name" value="<?=$data['name']?>" required><br>
  <input name="email" value="<?=$data['email']?>"><br>
  <input name="phone" value="<?=$data['phone']?>"><br>
  <input name="course" value="<?=$data['course']?>"><br>
  <button type="submit">Update</button>
</form>
