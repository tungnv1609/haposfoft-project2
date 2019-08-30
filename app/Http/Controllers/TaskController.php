<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use App\Report;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Config;
use Symfony\Component\Debug\FatalErrorHandler\UndefinedFunctionFatalErrorHandler;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    private $user;
    private $report;
    private $task;
    private $project;


    public function __construct(User $user, Report $report, Task $task, Project $project)
    {
        $this->user = $user;
        $this->report = $report;
        $this->task = $task;
        $this->project= $project;

    }
    function index ()
    {
        $tasks = task::paginate(3);
        return view('admin.task.index',['list_task'=>$tasks]);
    }

    public function create ()
    {
        $projects = $this->project->all();
        $users = $this->user->all();
        return view('admin.task.create', compact('projects', 'users'));
    }

    public function store (Request $request)
    {
        try {
            DB::beginTransaction();
            $taskCreate = $this->task->create([
                "project_id" => $request->project_id,
                "user_id" => $request->user_id,
                "name" => $request->name,
                "time" => $request->time,
            ]);
            DB::commit();
            return redirect()->route('task.index')
                ->with('success', 'User created successfully.');
        } catch (\Exception $exception) {
            DB::rollBack();
        }
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
