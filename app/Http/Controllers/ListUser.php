<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ListUser extends Controller
{
    function listUser ()
    {
        $users = User::paginate(9);
        return view('admin.user.list',['list_user'=>$users]);
    }

    public function editUser(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    function  deleteUser()
    {

    }

    public function createUser ()
    {
        return view('admin.user.create');
    }
}
