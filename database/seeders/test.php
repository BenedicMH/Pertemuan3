<?php

require __DIR__ . '/../../vendor/autoload.php';

$app = require_once __DIR__ . '/../../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

$books = DB::table('books')->limit(10)->get();

foreach ($books as $b) {
    echo "Title: {$b->title}, Author: {$b->author}, Publisher: {$b->publisher}, Year: {$b->year}\n";
}
