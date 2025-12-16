<?php
// src/Views/salamanders/index.php
//
// The View is responsible ONLY for displaying data as HTML.
// It receives the $salamanders variable from the controller.
// It should NOT talk directly to the database.
//
// We use htmlspecialchars() to prevent XSS (cross-site scripting) attacks,
// and nl2br() to keep line breaks in our text.
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Salamanders</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 12px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
    tr:hover {
      background-color: #f5f5f5;
    }
    button {
      margin: 0 5px;
      padding: 5px 10px;
      cursor: pointer;
    }
    .show-btn {
      background-color: #4CAF50;
      color: white;
      border: none;
    }
    .edit-btn {
      background-color: #2196F3;
      color: white;
      border: none;
    }
    .delete-btn {
      background-color: #f44336;
      color: white;
      border: none;
    }
    button:disabled {
      background-color: #cccccc;
      cursor: not-allowed;
    }
  </style>
</head>
<body>
  <h1>Salamanders</h1>
  
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Habitat</th>
        <th>Description</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($salamanders as $s): ?>
        <tr>
          <td><?= htmlspecialchars($s['id']) ?></td>
          <td><?= htmlspecialchars($s['name']) ?></td>
          <td><?= nl2br(htmlspecialchars($s['habitat'])) ?></td>
          <td><?= nl2br(htmlspecialchars($s['description'])) ?></td>
          <td>
            <a href="/salamanders/show?id=<?= htmlspecialchars($s['id']) ?>">
              <button class="show-btn">Show</button>
            </a>
            <button class="edit-btn" disabled>Edit</button>
            <button class="delete-btn" disabled>Delete</button>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
