<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $name = 'John Doe';
        $users = array(
            'fullname' => 'Erhahon Imafidon',
            'email' => 'imafidonerhahon@gmail.com',
            'phone' => '0812 984 4652',
        );
        return view('user', compact('name','users'));
    }
}
