<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehiclepreinspectionController extends Controller
{
    public function index(){
        return view('vehiclepreinspection.index');
    }
}
