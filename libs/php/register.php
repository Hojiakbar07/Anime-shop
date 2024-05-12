<?php
require "connect.php";
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql_insert = "INSERT INTO vhod (login,email, password)
VALUES('$login', '$email','$password')";
$db->query($sql_insert);
?>