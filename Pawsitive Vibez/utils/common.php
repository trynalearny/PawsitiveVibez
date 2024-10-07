<?php

function getLocalURL ($path='') {
  return 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].'/Pawsitive%20Vibez/'.$path;
}

function generateRandomString($length = 10) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
  return substr(str_shuffle(str_repeat($characters, ceil($length / strlen($characters)))), 0, $length);
}