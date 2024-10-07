<?php
include_once __DIR__ . '/../utils/common.php';

// Check if the session is not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<nav class ="navbar"> 
        <div class="navbar__contianer">
            <div class="logo"><a href="<?= getLocalURL() ?>" ><img src="<?= getLocalURL('public/images/logo.png') ?>"></a></div>
            <a href="/" id="navbar__logo">Pawsitive Vibez</a>
            <div class="navbar__toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
            </div>
        <ul class="navbar__menu">
            <li class="navbar__item"></li>
                <a href="<?= getLocalURL() ?>" class="navbar__links" > Home  </a>
            </li>
            <li class="navbar__item">
                <a href="<?= getLocalURL('about-us/') ?>" class="navbar__links" > About</a>
            </li>
            <li class="navbar__item">
                <a href="<?= getLocalURL('services/') ?>" class="navbar__links">Services</a>
            </li>
            <li class="navbar__item">
                <a href="<?= getLocalURL('appointment/') ?>" class="navbar__links">Book Appointment</a>
            </li>
            <li class="navbar__item">
                <a href="<?= getLocalURL('blogs/') ?>" class="navbar__links"> Blog  </a>
            </li>
            <li class="navbar__item"></li>
                <a href="<?= getLocalURL('contact/') ?>" class="navbar__links">Contact</a>
            </li>
<?php 
    if (isset($_SESSION['email'])){
?>
            <li class="navbar__item"></li>
                <a href="<?= getLocalURL('profile/') ?>" class="navbar__links">Hi <?= $_SESSION['first_name'] ?>!</a>
            </li>
<?php
    } else {
?>
            <li class="navbar_btn"></li>
                <a href="<?= getLocalURL('login/') ?>" class="button"> Login/Sign up   </a>
            </li>
<?php } ?>
         </ul>
    </div>
</nav>