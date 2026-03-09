<?php

require_once __DIR__ . '/bootstrap.php';

use App\Controllers\CommentController;

$controller = new CommentController();
$controller->submit();
