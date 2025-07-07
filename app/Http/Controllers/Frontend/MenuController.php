<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function index()
    {
        return view('frontend.menu'); // Ensure this view exists
    }
}