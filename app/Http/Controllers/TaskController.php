<?php

namespace App\Http\Controllers;

use App\Task;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    function index ()
    {
        $tasks = task::paginate(3);
        return view('admin.task.list',['list_task'=>$tasks]);
    }

    public function create ()
    {
    }

    public function store (Request $request)
    {

    }

    public function show (Task $task)
    {
    }

    public function edit (Task $task)
    {
    }

    public function update (Request $request, Task $task) {
    }

    public function destroy (Task $task)
    {

    }
}
