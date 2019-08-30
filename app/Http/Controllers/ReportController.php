<?php

namespace App\Http\Controllers;

//use App\Http\Requests\CreateUserRequest;
use App\Report;
use App\Task;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Config;
use Symfony\Component\Debug\FatalErrorHandler\UndefinedFunctionFatalErrorHandler;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    private $report;
    private $task;
    private $user;

    public function __construct(Report $report, Task $task, User $user)
    {
        $this->report = $report;
        $this->task = $task;
        $this->user = $user;
    }
    function index ()
    {
        $reports = Report::paginate(3);
        return view('admin.report.index',['list_report'=>$reports]);
    }

    public function create ()
    {
        $tasks = $this->task->all();
        $users = $this->user->all();
        return view('admin.report.create', compact('tasks', 'users'));

    }

    public function store (Request $request)
    {
        try {
            DB::beginTransaction();
            $reportCreate = $this->report->create([
                "user_id" => $request->user_id,
                "note" => $request->note,
            ]);
            $reportCreate->tasks()->attach($request->task);
            DB::commit();
            return redirect()->route('report.index')
                ->with('success', 'Report created successfully.');
        } catch (\Exception $exception) {
            DB::rollBack();
        }
    }

    public function show (Report $report)
    {

    }

    public function edit ($id)
    {
        $tasks = $this->task->all();
        $report = $this->report->findOrFail($id);
        $listTaskOfReport = DB::table('report_task')->where('report_id', $id)->pluck('task_id');
        return view('admin.report.edit', compact('tasks', 'report', 'listTaskOfReport'));
    }

    public function update (Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $this->report->where('id', $id)->update([
                "user_id" => $request->user_id,
                "note" => $request->note,
            ]);
            DB::table('report_task')->where('report_id', $id)->delete();
            $reportCreate = $this->report->find($id);
            $reportCreate->tasks()->attach($request->tasks);
            DB::commit();
            return redirect()->route('report.index')
                ->with('success', 'Report updated successfully.');
        } catch (\Exception $exception) {
            DB::rollBack();
        }
    }

    public function destroy ($id)
    {
        try {
            DB::beginTransaction();
            $report = $this->report->find($id);
            $report->delete($id);
            DB::commit();
            $report->tasks()->detach();
            return redirect()->route('report.index')
                ->with('success', 'Deleted successfully.');
        } catch (\Exception $exception) {
            DB::rollBack();
        }
    }
}
