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


Route::get('/', function () {
    return view('welcome');
});
*/
// 1. У файлі routes/web.php створіть такі маршрути

Route::get('/', function () {
    return 'головна сторінка сайту';
});
Route::get('/posts', function () {
    return ' список постів';
});

//3 Зробіть так, щоб при зверненні на адреси /test та 
// /dir/test у браузері виводилися якісь повідомлення
Route::get('/test', function () {
    return 'тест пройдено';
})->name(name:'test');

Route::get('/dir/{str}', function ($getTest) {
    return 'dir - '.$getTest;
})->name(name:'dir');



Route::prefix('post')->group(function () {
    Route::get('', function () {
        return ' список постів';
    });

    // 1. У файлі routes/web.php створіть такі маршрути
    Route::get('/1', function () {
        return ' перший пост';
    });

    //4. Відредагуйте роут для виведення конретного поста наступним чином:
    Route::get('/{id}', function ($id) {
        return 'пост ' . $id;
    });

    //6. Створіть маршрут наступного виду:
    Route::get('/{catId}/{postId}', function ($catId, $postId) {
            return $catId . ' ' . $postId;
    });

    //11. Зробіть маршрут виду /posts/:date, де замість :date має бути дата у форматі рік-місяць-день.
    Route::get('/{date}', function ($date) {
        return '11. Пост '.$date;
    });
})->name(name:'post'); //Route::prefix('post')->group(function ()

Route::prefix('user')->group(function () {
    //5. Зробіть маршрут, що обробляє адреси виду /user/:name, де замість :name може бути будь-який рядок.
    Route::get('/{name}',function ($name){
        return '5. Користувач '.$name;
    });

    //7. Зробіть маршрут, який обробляє адреси типу /user/:surname/:name/, де параметри задають ім'я та прізвище користувача.
    Route::get('/{surname}/{name}',function ($surname,$name){
        return '7 Користувач '.$name. ' ' . $surname;
    });
    
    //9. Зробіть маршрут виду /user/:id, де замість :id має бути тільки число. Спробуйте звернутися через браузер цього маршруту, передавши параметром не число. Зверніть увагу на результат.
    Route::get('/{id}',function ($id){
        return '9. Користувач '.$id;
    });

    //10. Зробіть маршрут виду /user/:id/:name, де замість :id має бути число, а замість :name - рядок, що складається з маленьких латинських літер кількістю більше 2-х. 
    Route::get('/{id}/{name_2}', function ($id,$name_2){
        return '10. Користувач '.$id.' '.$name_2;
    });
})->name(name:'user');

//8. Зробіть так, щоб за адресою /city/:city виводили вказане місто. При цьому місто було необов'язковим параметром і за умовчанням мало значення Kyiv.
Route::get('/city/{city}', function ($city) {
    return 'Місто '.$city;
})->name('city');

//12. Зробіть маршрут виду /:year/:month/:day, де замість :year має бути рік, замість :month - місяць, замість :day - день.
Route::get('/{year}/{month}/{day}', function ($year,$month,$day) {
    return "Дата $year - $month - $day";
});
// 13. Згрупуйте такі маршрути:

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return "13 admin/users";// Соответствует URL-адресу `/admin/users` ...
    });
    Route::get('/users/{id}', function ($id) {
        return "13 admin/users ".$id;// Соответствует URL-адресу `/admin/users` ...
    });
})->name(name:'admin');

// 14. Дайте імена всім попереднім маршрутам.

// 15. Командою php artisan route:list у консолі перевірте список ваших роутів. Скористайтеся додатковими командами --colwnns та –name.
// у файлі route.list.log