<?php

require_once "C:\\xampp\htdocs\prova-php\controllers\HomeController.php";

HomeController::logout();

header("Location: login.php");
exit();

?>