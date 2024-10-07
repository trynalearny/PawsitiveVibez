<?php

session_start();
include __DIR__ . '/common.php';
include __DIR__ . '/connect.php';

if (isset($_POST['signUp'])) {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);
    if ($result->num_rows > 0) {
        $_SESSION['login_error'] = "Email Address Already Exists!";

        header("Location: ".getLocalURL('login/'));
        exit();
    }
    
    $insertQuery = "INSERT INTO users(first_name, last_name, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";
    if ($conn->query($insertQuery) === TRUE) {
      $lastid = $conn->insert_id;
      $_SESSION['email'] = $email;
      $_SESSION['first_name'] = $firstName;
      $_SESSION['user_type'] = 'user';
      if ($lastid == 1) {
        $updateQuery = "UPDATE users SET user_type = 'admin' WHERE id = ".$lastid;
        $conn->query($updateQuery);
        $_SESSION['user_type'] = 'admin';
      }
      header("Location: /");
      exit();
    }
    
    echo "Error: " . $conn->error;
}

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['user_type'] = $row['user_type'];
        header("Location: /");
        exit();
    }

    $_SESSION['login_error'] = "Not Found, Incorrect Email or Password";

    header("Location: ".getLocalURL('login/'));
    exit();
}