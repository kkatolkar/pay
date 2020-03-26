<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerkycController extends Controller
{
    public function index(){
        return view('customerkyc.index');
    }
}
