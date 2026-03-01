<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    $featuredProducts = Product::active()->featured()->limit(6)->get();
    return view('home', compact('featuredProducts'));
})->name('home');

Route::get('/shop', function () {
    $products = Product::active()->paginate(12);
    return view('shop', compact('products'));
})->name('shop');

Route::get('/deals', function () {
    $deals = Product::active()->whereNotNull('discount_price')->paginate(12);
    return view('deals', compact('deals'));
})->name('deals');

Route::get('/orders', function () {
    return view('orders');
})->name('orders');

Route::get('/order-summary', function () {
    return view('order-summary');
})->name('order-summary');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/product/{id}', function ($id) {
    $product = Product::findOrFail($id);
    $relatedProducts = Product::active()
        ->where('category_slug', $product->category_slug)
        ->where('product_id', '!=', $id)
        ->limit(4)
        ->get();
    return view('product-details', compact('product', 'relatedProducts'));
})->name('product-details');
