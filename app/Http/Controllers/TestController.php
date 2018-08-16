<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cats;

class TestController extends Controller
{
    public function index()
    {

        $tasks = cats::all();

        return view('welcome', compact('tasks')); 
    }
}
