<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\UserController;

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
   
    Route::get('/{id}', [PostController::class, 'show']);

    Route::get('/{catId}/{postId}',[PostController::class, 'catPost'] );    

})->name(name:'post'); //Route::prefix('post')->group(function ()

Route::prefix('posts')->group(function () {
    Route::get('',[PostController::class, 'showAll']);

    Route::get('/{date}', [PostController::class, 'inDate']);

})->name(name:'post'); //Route::prefix('post')->group(function ()

Route::prefix('user')->name(name:'user.')->group(function () {
    Route::get('/all', [UserController::class, 'showAll'])
    ->name('all');

    Route::get('/{name}', [UserController::class,'show'])
    ->whereAlpha('name')->name('name');

    Route::get('/{surname}/{name}', [UserController::class, 'show'])
    ->whereAlpha(['name','surname'])->name('surnameName');

    Route::get('/{id}', [UserController::class,'show'])
    ->whereNumber('id')->name('id');

    Route::get('/{id}/{name}', [UserController::class, 'show'])
    ->whereNumber('id')->where('name', '[a-z]{2,}')->name('idName');
});//Route::prefix('user')->name(name:'user.')->group(function ()


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
    Route::get('/users', [AdminController::class, 'showAll']);
    Route::get('/users/{id}', [AdminController::class, 'show']);
})->name(name:'admin');

// 14. Дайте імена всім попереднім маршрутам.

// 15. Командою php artisan route:list у консолі перевірте список ваших роутів. Скористайтеся додатковими командами --colwnns та –name.
// у файлі route.list.log