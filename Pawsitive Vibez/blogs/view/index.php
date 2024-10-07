<?php

session_start();
include __DIR__ . '/../../utils/common.php';
include __DIR__ . '/../../utils/blog.php';

$row = getBlogById($_GET['blog_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $row['title'] ?></title>
    <link rel="stylesheet" href="<?= getLocalURL('public/css/dental.css') ?>">
    <link rel="stylesheet" href="<?= getLocalURL('public/css/navbar.css') ?>">
</head>
<body>
  <?php include __DIR__ . '/../../layouts/navbar.php'; ?>
    <main class="post-page">
        <article class="blog-post">
            <img src="<?= getLocalURL('public/images/blogs/dental.jpg') ?>" alt="" class="post-image">
            <div class="post-content" style="display: block; position: relative">
                <?php 
                if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == "admin") {
                ?>
                  <div style="position: absolute; right:20px"><a class="edit" href="<?= getLocalURL('blogs/edit/?blog_id='.$_GET['blog_id']) ?>">Edit</a></div>
                <?php
                }
                ?>
                <h2><?= $row['title'] ?></h2>
                <p class="date"><?= $row['last_updated'] ?></p>
                <p><?= $row['article'] ?><br></p>
            </div>
        </article>
        <a href="<?= getLocalURL('blogs/') ?>" class="back-link">Back to Blog</a>
    </main>
</body>
</html>