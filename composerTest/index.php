<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers\TestController;
use App\Models\TestModel;
use Carbon\Carbon;

$app = new TestController;
$app->run();

echo Carbon::now();
