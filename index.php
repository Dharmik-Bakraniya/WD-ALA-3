<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Book List</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Book List</h1>
  <a href="add.php">+ Add New</a>
  <table>
    <tr>
      <th>Title</th><th>Author Name</th><th>Year</th><th>Actions</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM books");
    while($row = $result->fetch_assoc()):
    ?>
    <tr>
      <td><?= $row['title'] ?></td>
      <td><?= $row['author'] ?></td>
      <td><?= $row['year'] ?></td>
      <td>
        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
        <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
      </td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
