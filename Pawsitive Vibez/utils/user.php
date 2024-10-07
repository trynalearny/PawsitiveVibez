<?php

// Check if the session is not already started
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
include_once __DIR__ . '/common.php';
include_once __DIR__ . '/connect.php';

$limit = 10;

function getUsers ($page = 1) {
  global $conn, $limit;

  // Calculate the starting record (offset)
  $offset = ($page - 1) * $limit;

  $getUserQuery = "SELECT id, first_name, last_name, email, user_type, DATE_FORMAT(added_on, '%M %e, %Y') as joined_on FROM users WHERE email != '".$_SESSION['email']."' ORDER BY added_on DESC LIMIT $limit OFFSET $offset";
  $result = $conn->query($getUserQuery);
  if ($result->num_rows > 0) {
    $data = array();
    while($row = $result->fetch_assoc()) {
      $data[] = $row;
    }
    return $data;
  }
  return [];
}

function toggleUserType ($id) {
  global $conn;

  $toggleQuery = "UPDATE users SET user_type = CASE WHEN user_type = 'admin' THEN 'user' ELSE 'admin' END WHERE id = $id and email != '".$_SESSION['email']."'";
  $conn->query($toggleQuery);
}

function deleteUser ($id) {
  global $conn;

  $deleteQuery = "DELETE FROM users WHERE id = $id and email != '".$_SESSION['email']."'";
  $conn->query($deleteQuery);
}

function getUserCount () {
  global $conn, $limit;
  $totalQuery = "SELECT COUNT(*) AS total FROM users";
  $totalResult = $conn->query($totalQuery);
  $totalRow = $totalResult->fetch_assoc();
  $totalRows = $totalRow['total'];
  $totalPages = ceil($totalRows / $limit);

  return $totalPages;
}

if (isset($_GET['toggleId']) && $_SESSION['user_type'] == 'admin') {
  toggleUserType($_GET['toggleId']);
}

if (isset($_GET['deleteId']) && $_SESSION['user_type'] == 'admin') {
  deleteUser($_GET['deleteId']);
}

if (isset($_GET['page'])) {
  echo json_encode(getUsers($_GET['page']));
  exit();
}
