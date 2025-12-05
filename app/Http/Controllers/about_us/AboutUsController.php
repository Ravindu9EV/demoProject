<?php

namespace App\Http\Controllers\about_us;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{

    public function index()
    {
        return view('pages.about-us.about_us');
    }

}
