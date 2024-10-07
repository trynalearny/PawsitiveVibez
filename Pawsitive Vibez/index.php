<?php

include __DIR__ . '/utils/common.php';

redirectToHome();

function redirectToHome() {
  header("Location: ".getLocalURL('home/'));
  die();
}