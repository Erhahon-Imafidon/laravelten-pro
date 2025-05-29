<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index()
    {
        echo "<h1>Fluent Strings</h1>";

        $slice = Str::of("Welcome to my application")->after('Welcome to');
        echo $slice. '<br>';

        $slice2 = Str::of('App\Http\Controllers\Controller')->afterLast('\\');
        echo $slice2 . '<br>';

        $string = Str::of('Hello')->append('World!');
        echo $string . '<br>';

        $result = Str::of('LARAVEL 8.0')->lower();
        echo $result . '<br>';

        $replaced = Str::of('Laravel 8.0')->replace('8.0', '10.0');
        echo $replaced . '<br>';

        $converted = Str::of('this is a title: ')->title();
        echo $converted .'<span>"title method"</span>'. '<br>';

        $convertedApa = Str::of('this is a title:  ')->apa();
        echo $convertedApa .'<span>"apa method"</span>'. '<br>';

        $slug = Str::of('Laravel 10 framework')->slug('-');
        echo $slug . '<br>';

        $srt = Str::of('Laravel framework')->substr(8, 5);
        echo $srt . '<br>';

        $str2 = Str::of('/laravel-trim/')->trim('/');
        echo $str2 . '<br>';

        $str3 = Str::of('laravel 10')->upper();
        echo $str3 . '<br>';
    }
}
