<?php

require_once __DIR__ . '/bootstrap.php';

use App\Controllers\PageController;

$controller = new PageController();
$controller->about();
