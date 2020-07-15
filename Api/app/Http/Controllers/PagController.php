<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagController extends Controller
{
    public function chrome()
    {
        return view('chrome');
    }
    public function chromep()
    {
        return view('chromep');
    }
    public function chromew()
    {
        return view('chromew');
    }
}
