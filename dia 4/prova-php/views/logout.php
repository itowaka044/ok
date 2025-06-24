<?php

require_once 'controllers\HomeController.php';

HomeController::logout();

header('Location: login');
exit;