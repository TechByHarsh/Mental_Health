<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$assessments = \Illuminate\Support\Facades\DB::table('assessments')->get();
foreach($assessments as $a) {
    \Illuminate\Support\Facades\DB::table('assessments')
        ->where('id', $a->id)
        ->update(['name' => trim($a->name)]);
}
echo "Done\n";
