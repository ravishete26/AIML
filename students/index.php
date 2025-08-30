<?php include "../config.php";
if(!isset($_SESSION['user'])){ header("Location: ../login.php"); exit; }
$rows=$conn->query("SELECT * FROM students ORDER BY id DESC");
?>
<h2>Students</h2>
<a href="create.php">+ Add Student</a> | <a href="../index.php">Back</a>
<table border="1" cellpadding="6">
<tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Course</th><th>Action</th></tr>
<?php while($r=$rows->fetch_assoc()): ?>
<tr>
<td><?=$r['id']?></td>
<td><?=$r['name']?></td>
<td><?=$r['email']?></td>
<td><?=$r['phone']?></td>
<td><?=$r['course']?></td>
<td>
  <a href="edit.php?id=<?=$r['id']?>">Edit</a> | 
  <a href="delete.php?id=<?=$r['id']?>" onclick="return confirm('Delete?')">Delete</a>
</td>
</tr>
<?php endwhile; ?>
</table>
