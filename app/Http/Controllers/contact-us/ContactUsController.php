<?php

namespace App\Http\Controllers\contact-us;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact-us.contact_us');
    }
}
