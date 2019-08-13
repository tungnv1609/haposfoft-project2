<?php

namespace App\Http\Controllers;

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
    }

    public function store (Request $request)
    {
    }

    public function show (Report $report)
    {
    }

    public function edit (Report $report)
    {
    }

    public function update (Request $request, Report $report) {
    }

    public function destroy (Report $report)
    {

    }
}
