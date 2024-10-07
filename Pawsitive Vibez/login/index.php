<?php
session_start();
include __DIR__ . '/../utils/common.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="<?= getLocalURL('public/css/login.css') ?>">
    <link rel="stylesheet" href="<?= getLocalURL('public/css/navbar.css') ?>">
    <link rel="stylesheet" href="<?= getLocalURL('public/css/footer.css') ?>">
</head>
<body>
<?php include __DIR__ . '/../layouts/navbar.php'; ?>
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Register</h1>
      <form method="post" action="<?= getLocalURL('utils/login.php') ?>">
        <div class="input-group">
          <i class="fas fa-user"></i>
          <input type="text" name="fName" id="fName" placeholder="First Name" required>
          <label for="fName">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
      <input type="submit" class="btn" value="Sign Up" name="signUp">
      </form>
      
      <div class="links">
        <p>Already Have an Account?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="<?= getLocalURL('utils/login.php') ?>">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>

         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
       
       
        <div class="links">
          <p>Don't have an account yet?</p>
          <button id="signUpButton">Sign Up</button>
        </div>
      </div>
      <?php 
        if(isset($_SESSION['login_error'])) {
          ?>
        <div class="container" id="warning">
          <p style="text-align:center"><?= $_SESSION['login_error'] ?></p>
        </div>
          <?php
          $_SESSION['login_error'] = null;
        }
      ?>
<script src="<?= getLocalURL('public/js/login.js') ?>"></script>
</body>
</html>
