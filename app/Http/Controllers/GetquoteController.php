<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetquoteController extends Controller
{
    public function index(){
        return view('getaquote.index');
    }
}
