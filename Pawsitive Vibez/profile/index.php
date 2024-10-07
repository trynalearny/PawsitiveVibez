<?php
session_start();
include __DIR__ . '/../utils/common.php';

if (!isset($_SESSION['email'])) {
  header('Location: '.getLocalURL('login/'));
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= getLocalURL('public/css/navbar.css') ?>">
  <link rel="stylesheet" href="<?= getLocalURL('public/css/footer.css') ?>">
  <link rel="stylesheet" href="<?= getLocalURL('public/css/profile.css') ?>">
  <title>Pawsitive Vibez</title>
</head>
<body>
  <?php
    include __DIR__ . '/../layouts/navbar.php';
  ?>
<div class="user">
  <a href="<?= getLocalURL('utils/logout.php')?>" class="logout">Logout</a>
  <a href="<?= getLocalURL('blogs/create')?>" class="logout">Add Blog</a>
  <?php
    if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin') {
      ?>
      <a href="<?= getLocalURL('users/')?>" class="logout">Manage Users</a>
      <?php
    }
  ?>
</div>
  <?php
    include __DIR__ . '/../layouts/footer.php';
  ?>
</body>
</html>