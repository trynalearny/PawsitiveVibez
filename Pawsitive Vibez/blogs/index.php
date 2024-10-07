<?php
  include __DIR__ . '/../utils/common.php';
  include __DIR__ . '/../utils/blog.php';

  $totalBlogs = getBlogCount();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Grooming Blog</title>
    <link rel="stylesheet" href="<?= getLocalURL('public/css/blog.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>

<?php include __DIR__ . '/../layouts/navbar.php'; ?>

    <main>
        <section class="blog" id="blog-section">
            <!-- Blog posts will be injected here by JavaScript -->
        </section>
        <button id="load-more" class="load-more">Load More</button>
    </main>

    <?php include __DIR__ . '/../layouts/footer.php'; ?>

    <script>
      const baseUrl = "<?= getLocalURL() ?>"
      const totalBlogs = <?= $totalBlogs ?>

    </script>
    <script src="<?= getLocalURL('public/js/blog.js') ?>"></script>
    </div>
</body>
</html>

