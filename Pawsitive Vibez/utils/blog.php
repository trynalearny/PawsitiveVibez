<?php
// Check if the session is not already started
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
include_once __DIR__ . '/common.php';
include_once __DIR__ . '/connect.php';

$targetDir = __DIR__ . "/../public/images/blogs/";

$newFileName = '';

// Check if the file was uploaded without errors
if (isset($_FILES["thumbnail"])) {
  if ($_FILES["thumbnail"]["error"] === UPLOAD_ERR_OK) {
    // Retrieve file information
    $originalFileName = basename($_FILES["thumbnail"]["name"]);
    $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);

    // Generate a new unique name for the file (you can adjust this to your needs)
    $newFileName = generateRandomString(32) . '.' . $fileExtension;

    // Set the target file path with the new file name
    $targetFilePath = $targetDir . $newFileName;
    // Move the uploaded file to the target directory
    if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $targetFilePath)) {
        echo "File has been uploaded and renamed to: " . $newFileName;
    } else {
        echo "Sorry, there was an error moving the uploaded file.";
    }
  } else {
    echo "Error during file upload: " . $_FILES["thumbnail"]["error"];
  }
}

if (isset($_POST['form_type']) && $_POST['form_type'] == 'create') {
  $getUserQuery = "SELECT id FROM users WHERE email='". $_SESSION['email'] ."'";
  $result = $conn->query($getUserQuery);
  if ($result->num_rows <= 0) {
    echo "Unauthorized access!";
    exit();
  }

  $row = $result->fetch_assoc();

  $insertQuery = "INSERT INTO blogs (user_id, title, description, article, thumbnail) VALUES (".$row['id'].", '".$_POST['title']."', '".$_POST['description']."', '".$_POST['article']."', '".$newFileName."')";

  if ($conn->query($insertQuery) === TRUE) {
    header('Location: '. getLocalURL('blogs/'));
    exit();
  }
}

if (isset($_POST['form_type']) && $_POST['form_type'] == 'edit') {

  $updateQuery = "UPDATE blogs SET title = '".$_POST['title']."', description = '".$_POST['description']."', article = '".$_POST['article']."' '". ($newFileName !== '' ? ", thumbnail = '$newFileName'" : '') ."' WHERE id =".$_POST["blog_id"];

  if ($conn->query($updateQuery) === TRUE) {
    header('Location: '. getLocalURL('blogs/view/?blog_id='.$_POST["blog_id"]));
    exit();
  }
}

if (isset($_GET['limit']) && isset($_GET['offset'])) {
  echo json_encode(getBlogs($_GET['limit'], $_GET['offset']));
  exit();
}

function getBlogById ($id) {
  global $conn;
  $getBlogQuery = "SELECT title, thumbnail, article, description, DATE_FORMAT(updated_on, '%M %e, %Y') as last_updated FROM blogs WHERE id=". ((int)$id);
  $result = $conn->query($getBlogQuery);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    return $row;
  }
  return [];
}

function getBlogs ($limit = 3, $offset = 0) {
  global $conn;
  $getBlogQuery = "SELECT id, title, thumbnail, article, description, DATE_FORMAT(updated_on, '%M %e, %Y') as last_updated FROM blogs ORDER BY updated_on DESC LIMIT $limit OFFSET $offset";
  $result = $conn->query($getBlogQuery);
  if ($result->num_rows > 0) {
    $data = array();
    while($row = $result->fetch_assoc()) {
      $data[] = $row;
    }
    return $data;
  }
  return [];
}

function getBlogCount () {
  global $conn;
  $totalQuery = "SELECT COUNT(*) AS total FROM blogs";
  $totalResult = $conn->query($totalQuery);
  $totalRow = $totalResult->fetch_assoc();
  return $totalRow['total'];
}

?>
