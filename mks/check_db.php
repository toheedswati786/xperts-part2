<?php

require_once 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

// Configure database connection
$capsule = new Capsule;
$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => '127.0.0.1',
    'database'  => 'mks',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

echo "Database connection successful!\n\n";

// Check table counts
$tables = ['products', 'categories', 'users', 'reviews', 'orders'];
foreach ($tables as $table) {
    try {
        $count = Capsule::table($table)->count();
        echo ucfirst($table) . " count: " . $count . "\n";
    } catch (Exception $e) {
        echo "Table $table: Error - " . $e->getMessage() . "\n";
    }
}

echo "\nSample products:\n";
try {
    $products = Capsule::table('products')->limit(5)->get();
    foreach ($products as $product) {
        echo "- " . $product->name . " ($" . $product->price . ")\n";
    }
} catch (Exception $e) {
    echo "Error fetching products: " . $e->getMessage() . "\n";
}