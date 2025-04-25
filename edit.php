<?php
include 'db.php';
$id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST['title'];
  $author = $_POST['author'];
  $year = $_POST['year'];
  $conn->query("UPDATE books SET title='$title', author='$author', year='$year' WHERE id=$id");
  header("Location: index.php");
}
$result = $conn->query("SELECT * FROM books WHERE id=$id");
$row = $result->fetch_assoc();
?>
<form method="post">
  Title: <input type="text" name="title" value="<?= $row['title'] ?>"><br>
  Author: <input type="text" name="author" value="<?= $row['author'] ?>"><br>
  Year: <input type="text" name="year" value="<?= $row['year'] ?>"><br>
  <input type="submit" value="Update">
</form>
