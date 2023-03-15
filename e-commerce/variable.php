<?php

$password_string = "password";
$hash = password_hash($password_string, PASSWORD_DEFAULT);

echo "Hashed Password: ". $hash;

?>