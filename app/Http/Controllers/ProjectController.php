<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    function listProject ()
    {
        $projects = Project::paginate(3);
        return view('',['list_project'=>$projects]);
    }

    public function editProject(Project $project)
    {
        return view('admin.project.edit', compact('project'));
    }

    function  deleteProject()
    {

    }

    public function createProject ()
    {
        return view('admin.project.create');
    }
}
