<?php
// src/Controllers/SalamanderController.php
//
// The Controller receives a request (from the router),
// asks the Model for data, and then chooses a View to display.
require_once __DIR__ . '/../Models/Salamander.php';
class SalamanderController
{
  /**
   * Controller action to show a list of all salamanders.
   */
  public function index(): void
  {
    $salamanders = Salamander::all();

    require __DIR__ . '/../Views/salamanders/index.php';
  }

  public function show(): void
  {
    if (!isset($_GET) || !is_numeric($_GET['id']) || $_GET['id'] <= 0) {
      http_response_code(400);
      echo "Invalid or missing ID";
      return;
    }

    $id = (int)$_GET['id'];

    $salamander = Salamander::find($id);

    if ($salamander === null) {
      http_response_code(404);
      echo "Salamander not found";
      return;
    }

    require __DIR__ . '/../Views/salamanders/show.php';
  }
}
