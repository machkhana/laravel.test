<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('product.index');
    }
    public function show(int $prodid){
<<<<<<< HEAD
        return view('product.show')->with(['prodid'=>$prodid]);
=======
        return view('product.show')->with('prodid',$prodid);
    }
    public function edit(){
        return ('vasili');
>>>>>>> 2bf02bc4f37830c51e06d970bc7875c128de1b84
    }
}
