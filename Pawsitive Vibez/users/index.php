<?php
session_start();
include __DIR__ . '/../utils/common.php';
include __DIR__ . '/../utils/user.php';


if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] != 'admin') {
  header('Location: '.getLocalURL('profile/'));
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
  <link rel="stylesheet" href="<?= getLocalURL('public/css/users.css') ?>">
  <title>Pawsitive Vibez</title>
</head>
<body>
  <?php
    include __DIR__ . '/../layouts/navbar.php';
  ?>
<div id="userTable"></div>

<!-- Pagination controls -->
<div id="pagination" class="pagination"></div>

<script>
    const baseUrl = "<?= getLocalURL() ?>";
    let totalPages = <?= getUserCount() ?>;
</script>
<script src="<?= getLocalURL('public/js/users.js')?>"></script>
<?php
    include __DIR__ . '/../layouts/footer.php';
  ?>
</body>
</html>