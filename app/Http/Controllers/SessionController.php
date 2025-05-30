<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSessionData(Request $request)
    {
        if($request->session()->has('name'))
        {
            echo $request->session()->get('name');
        }
        else
        {
          echo 'Session data not found.';
        }
    }

    public function storeSessionData(Request $request)
    {
        $request->session()->put('name', 'Imafidon');
        echo 'Data has been added to the session.';
    }

    public function deleteSessionData(Request $request)
    {
         $request->session()->forget('name');
         echo 'Session data has been deleted.';
    }
}
