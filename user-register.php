<?php

require_once __DIR__ . '/bootstrap.php';

use App\Controllers\UserAuthController;

$controller = new UserAuthController();
$controller->register();
