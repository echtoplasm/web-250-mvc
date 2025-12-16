<?php
// src/Views/salamanders/show.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($salamander['name']) ?></title>
</head>

<body>
  <h1><?= htmlspecialchars($salamander['name']) ?></h1>

  <h2>Habitat</h2>
  <p><?= htmlspecialchars($salamander['habitat']) ?></p>

  <h2>Description</h2>
  <p><?= nl2br(htmlspecialchars($salamander['description'])) ?></p>

  <p><a href="/salamanders">Back to list</a></p>
</body>

</html>
