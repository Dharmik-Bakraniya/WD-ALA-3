<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST['title'];
  $author = $_POST['author'];
  $year = $_POST['year'];

  // Insert into books table
  $stmt = $conn->prepare("INSERT INTO books (title, author, year) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $title, $author, $year);
  $stmt->execute();
  $stmt->close();

  header("Location: index.php");
  exit();
}
?>
<form method="post">
  Title: <input type="text" name="title" required><br>
  Author Name: <input type="text" name="author" required><br>
  Year: <input type="text" name="year" required><br>
  <input type="submit" value="Add">
</form>
