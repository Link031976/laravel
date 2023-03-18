<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //Пост за id
    public function show($id)
    {
        return "Пост $id ";
    }

   //Усі пости
    public function showAll()
    {
        return 'Список всіх постів.';
    }
    //Пост з зазначенням категорії
    public function catPost($catId,$postId)
    {
        return "Категорія $catId пост: $postId";
    }

    //Усі пости за вказану дату
    public function inDate($date)
    {
        return "пости за $date дату";
    }
}

