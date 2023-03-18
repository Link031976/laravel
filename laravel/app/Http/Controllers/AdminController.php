<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showAll()
    {
        return "Всі адміни ";
    }

    public function show($id)
    {
        return "Адмін $id ";
    }
}
