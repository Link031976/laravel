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

Route::get('/dir/{str}', function ($getTest) {
    return 'dir - '.$getTest;
});

//4 Відредагуйте роут для виведення конретного поста наступним 
// чином:
Route::get('/post/{id}', function ($id) {
    return 'пост ' . $id;
});

//Переконайтеся у правильності виведення інформації у браузері.
//5. Зробіть маршрут, що обробляє адреси виду /user/:name, де замість :name може бути будь-який рядок.
Route::get('/user/{str}', function ($str) {
    return 'Користувач ' . $str;
});

//6. Створіть маршрут наступного виду:
Route::get('/post/{catId}/{postId}', function ($catId, $postId) {
		return $catId . ' ' . $postId;
	});

//7. Зробіть маршрут, який обробляє адреси типу /user/:surname/:name/, де параметри задають ім'я та прізвище користувача.
Route::get('/user/{surname}/{name}', function ($surname, $name) {
    return 'Користувач '.$name. ' ' . $surname;
});
/*8. Зробіть так, щоб за адресою /city/:city виводили вказане місто. При цьому місто було необов'язковим параметром і за умовчанням мало значення Kyiv.
*/