<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedopaymentController extends Controller
{
    public function index(){
        return view('redopayment.index');
    }
}
