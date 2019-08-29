<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReportRequest;
use App\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    function index ()
    {
        $reports = Report::paginate(3);
        return view('admin.report.list',['list_report'=>$reports]);
    }

    public function create ()
    {
        return view('admin.report.create');

    }

    public function store (CreateReportRequest $request)
    {
        $request->validate([
           'user_id' => 'require',
        ]);

        Report::create($request->all());

        return redirect()->route('report.index')
            ->with('success','Report created successfully.');
    }

    public function show (Report $report)
    {
        $data = [
            'report' => $report,
        ];
        return view('admin.report.show', $data);
    }

    public function edit (Report $report)
    {
        return view('admin.report.edit',compact('report'));
    }

    public function update (Request $request, Report $report)
    {
        $report->update($request->all());

        return redirect()->route('report.index')
            ->with('success','Report updated successfully');
    }

    public function destroy (Report $report)
    {
        $report->delete();
        return redirect()->route('report.index')
            ->with('success', 'Report deleted successfully');
    }
}
