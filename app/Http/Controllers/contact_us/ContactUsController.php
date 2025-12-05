<?php

namespace App\Http\Controllers\contact_us;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('pages.contact_us.contact_us');
    }
}
