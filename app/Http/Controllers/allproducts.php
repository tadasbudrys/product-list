<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class allproducts extends Controller
{
      public function index()
    {
        $users = DB::select('SELECT * FROM `products` ');

        return view('index', ['users' => $users]);
    }
}
