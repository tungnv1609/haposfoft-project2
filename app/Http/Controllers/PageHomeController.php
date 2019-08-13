<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PageHomeController extends Controller
{
    function indexPageHome ()
    {
//        $users = User::paginate(9);
//        return view('pages.home',['list_user'=>$users]);
        return view('pages.home');
    }

    function showUser ()
    {
                $users = User::paginate(9);
        return view('pages.show',['list_user'=>$users]);
    }
}
