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
    return '5. Користувач ' . $str;
});

//6. Створіть маршрут наступного виду:
Route::get('/post/{catId}/{postId}', function ($catId, $postId) {
        return $catId . ' ' . $postId;
    });

//7. Зробіть маршрут, який обробляє адреси типу /user/:surname/:name/, де параметри задають ім'я та прізвище користувача.
Route::get('/user/{surname}/{name}', function ($surname, $name) {
    return '7 Користувач '.$name. ' ' . $surname;
});
//8. Зробіть так, щоб за адресою /city/:city виводили вказане місто. При цьому місто було необов'язковим параметром і за умовчанням мало значення Kyiv.
Route::get('/city/{city}', function ($city) {
    return 'Місто '.$city;
});

//9. Зробіть маршрут виду /user/:id, де замість :id має бути тільки число. Спробуйте звернутися через браузер цього маршруту, передавши параметром не число. Зверніть увагу на результат.
Route::get('/user9/{id}', function ($id) {
    return '9. Користувач '.$id;
});
// !!! До /user додано 9, оскільки роут завдання 5 перехоплює

//10. Зробіть маршрут виду /user/:id/:name, де замість :id має бути число, а замість :name - рядок, що складається з маленьких латинських літер кількістю більше 2-х. 
Route::get('/user10/{id}/{name_2}', function ($id,$name_2) {
    return '10. Користувач '.$id.' '.$name_2;
});

//11. Зробіть маршрут виду /posts/:date, де замість :date має бути дата у форматі рік-місяць-день.
Route::get('/posts11/{date}', function ($date) {
    return '11. Пост '.$date;
});
//12. Зробіть маршрут виду /:year/:month/:day, де замість :year має бути рік, замість :month - місяць, замість :day - день.
Route::get('/{year}/{month}/{day}', function ($year,$month,$day) {
    return '12. /:year/:month/:day '.$year.'-'.$month.'-'.$day;
});

// 13. Згрупуйте такі маршрути:

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return "13 admin/users";// Соответствует URL-адресу `/admin/users` ...
    });
    Route::get('/users/{id}', function ($id) {
        return "13 admin/users ".$id;// Соответствует URL-адресу `/admin/users` ...
    });
});

// 14. Дайте імена всім попереднім маршрутам.
// 15. Командою php artisan route:list у консолі перевірте список ваших роутів. Скористайтеся додатковими командами --colwnns та –name.
