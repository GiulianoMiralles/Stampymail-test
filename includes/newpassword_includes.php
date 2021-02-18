<?php
// newpassword_includes.php generates a new random password in this case of 7 characters 
function password_generate($chars)
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}

$new_password = password_generate(7);
