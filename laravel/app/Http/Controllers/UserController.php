<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show($id, $name = '')
    {
        return 'Користувач ' . (is_numeric($id) ? '(id=' . $id .')' : $id) . ' ' . $name;
    }

   //Усі юзери
    public function showAll()
    {
        return 'Список всіх користувачів.';
    }

     //список адмінів
    public function showAdminAll()
    {
        return 'Список адміністраторів.';
    }

    // вивиід користувача за id
    public function showAdmin($id)
    {
        return "Адміністратор (користувач id=  $id ).";
    }
}
