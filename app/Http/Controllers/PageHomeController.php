<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Config;

class PageHomeController extends Controller
{

    function index ()
    {
        $users = User::paginate(9);
        return view('pages.list', ['list_user' => $users]);
    }

    function show (User $user)
    {
        $url_avatar = url('/') .'/storage/'. $user->avatar;
        $data = [
            'user' => $user,
            'url_avatar' => $url_avatar
        ];
        return view('pages.show', $data);
    }
}
