<?php

include __DIR__ . '/../../utils/common.php';
include __DIR__ . '/../../utils/blog.php';

$row = getBlogById($_GET['blog_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog</title>
    <link rel="stylesheet" href="<?= getLocalURL('public/css/appointment.css') ?>">
    <link rel="stylesheet" href="<?= getLocalURL('public/css/blog_editor.css') ?>">
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
<?php
include __DIR__ . '/../../layouts/navbar.php';
?>

    <div class="background">
        <div class="booking-form">
            <h2>Create Blog</h2>
            <form action="<?= getLocalURL('utils/blog.php') ?>" method="post" id="appointmentForm" enctype="multipart/form-data">
                <input type="hidden" name="form_type" value="edit">
                <input type="hidden" name="blog_id" value=<?= $_GET['blog_id'] ?>>
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" value="<?= $row['title'] ?>" required><br>
                <label for="thumbnail">Thumbnail:</label>
                <input type="file" name="thumbnail" id="thumbnail"><br>

                <label for="description">Description:</label>
                <textarea type="description" name="description" id="description" required><?= $row['description'] ?></textarea><br>

                <label for="article">Article:</label>
                <textarea type="article" name="article" id="article" required><?= $row['article'] ?></textarea><br>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>
   
    <script src="<?= getLocalURL('public/js/appointment.js') ?>"></script>
    <script>
        document.getElementById('appointmentForm').onsubmit = function() {
            alert('Form submitted!');
        };
    </script>
</body>
</html>
