<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoductController extends Controller
{
    public function index(){
        return view('product.index');
    }
    public function show(int $prodid){
        return view('product.show')->with('prodid',$prodid);
    }
}
