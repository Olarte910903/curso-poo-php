<?php

require("abstract/Guest.php");
require("abstract/User.php");
require("abstract/Admin.php");

$guest = new Guest();

echo $guest->login();

$user = new User('Miguel');

echo $user->login();

$admin = new Admin('Administrador');

echo $admin->login();

$guest2 = new Guest();

echo $guest2->login();

