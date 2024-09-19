<?php

use Illuminate\Support\Facades\Route;


Route::get('/promotions', [YourController::class, 'showPromotions']);



use App\Http\Controllers\PromotionController;

Route::get('/promotions', [PromotionController::class, 'showPromotions']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/carrito', function () {
    return view('carrito');
});

Route::get('/pago', function () {
    return view('pago');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/product1', function () {
    return view('product1');
});

Route::get('/product2', function () {
    return view('product2');
});

Route::get('/product3', function () {
    return view('product3');
});

Route::get('/product4', function () {
    return view('product4');
});

Route::get('/product5', function () {
    return view('product5');
});

Route::get('/regis', function () {
    return view('regis');
});


