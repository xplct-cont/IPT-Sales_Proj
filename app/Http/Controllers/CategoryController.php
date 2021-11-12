<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $c = Category::orderBy('category')->get();

        return view('categories.index', ['categories'=>$c]);
    }
    

}
