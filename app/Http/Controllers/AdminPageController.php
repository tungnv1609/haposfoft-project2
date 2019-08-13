<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    function indexAdmin ()
    {
        return view('admin.layout.index');
    }
}
