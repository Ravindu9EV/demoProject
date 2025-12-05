<?php

namespace App\Http\Controllers\projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function project() {
        return view('projects.projects');
    }
}
