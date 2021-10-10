<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $districts = District::all();
        return view('pages.home', compact('districts'));
    }
}
