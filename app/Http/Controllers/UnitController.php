<?php

namespace App\Http\Controllers;
use App\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    
    public function index(){
        $u = Unit::orderBy('id')->get();

        return view('units.index', ['units'=>$u]);
    }
}
