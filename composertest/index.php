<?php

require_once __DIR__ . '/../vendor/autoload.php';//一度だけautoloadファイルを読み込む必要がある

use App\Controllers\TestController;
//import完了

$app = new TestController;
$app->run();

// use Carbon\Carbon;

// echo Carbon::now();
