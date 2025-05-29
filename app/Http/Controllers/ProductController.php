<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $fruits = array('Apple', 'Banana', 'Orange', 'Mango', 'Pineapple');
        return view('welcome',  compact('fruits'));
    }
}
