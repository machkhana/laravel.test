<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
        {
            $this->middleware('auth');

            $this->categories= new Category();
        }

    public function index()
    {
        $categoryes=$this->categories->all();
        return view('admin.category.index')->with('categoryes',$categoryes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryes=$this->categories->all();
        return view('admin.category.create')->with('categoryes',$categoryes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->cat == NULL){
            $this->validate($request ,[
                'name_ge'=>'required',
                'name_en'=>'required',
                'sort'=>'required',
            ]);
            $this->categories->name_ge=$request->name_ge;
            $this->categories->name_en=$request->name_en;
            $this->categories->sort=$request->sort;
            $this->categories->save();
        }else{
            $this->validate($request ,[
                'name_ge'=>'required',
                'name_en'=>'required',
                'cat'=>'required',
            ]);
            $this->subcategories->name_ge=$request->name_ge;
            $this->subcategories->name_en=$request->name_en;
            $this->subcategories->cat_id=$request->cat;
            $this->subcategories->save();
        }

        /*if($this->validate($request)->fails()){
            return redirect('/admin/category')->withErrors($this->validate($request))->withInput();
        }*/



        return redirect ('/admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
