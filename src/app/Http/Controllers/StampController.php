<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StampController extends Controller
{
    public function showClockPage()
    {
        return view('stamp');
    }
}
