<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 1 

Route::get('/', function () {
    return 'головна сторінка сайту';
});

Route::get('/posts', function () {
    return ' список постів';
});

Route::get('/post/1', function () {
    return ' перший пост';
});
//2. Переконайтеся, що за посиланнями "/", 
//"/posts" та "/post/1" відкриваються відповідні сторінки.

//3 Зробіть так, щоб при зверненні на адреси /test та 
// /dir/test у браузері виводилися якісь повідомлення
Route::get('/test', function () {
    return 'тест пройдено';
});

Route::get('/dir/test', function ($test) {
    return '';
});