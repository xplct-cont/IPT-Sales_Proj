<?php

namespace App\Http\Controllers;
use App\Merchandise;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    public function index(){
        $m = Merchandise::orderBy('id')->get();

        return view('merchandises.index', ['merchandises'=>$m]);
    }
}
