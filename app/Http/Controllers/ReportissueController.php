<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportissueController extends Controller
{
    public function index(){
        return view('reportissue.index');
    }
    public function store(Request $request){
        //dd($request->all());
    }
}
