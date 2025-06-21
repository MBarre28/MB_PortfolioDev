<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class signinController extends Controller
{
    public function services()
    {
       return view('frontendviews.signin');
    }
}
