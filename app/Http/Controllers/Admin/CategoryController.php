<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;
use App\Model\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=Category::latest()->get();

        return view('backend.admin.category.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'category_name'=>'required|unique:categories,category_name'
        ]);

            $obj_category=new Category;
            $obj_category->category_name=$request->category_name;
            $obj_category->category_slug=Str::slug($request->category_name);
            $obj_category->save();
            Toastr::success('Category has been created!','Created');
        //  $datas=Servicearea::latest()->get();

        // return view('backend.admin.area.index',compact('datas'));

        return redirect()->route('admin.category.index');
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
    public function edit($id)
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
        $request->validate([

            'category_name'=>'required'
        ]);

        $obj_category=Category::find($id);
        $obj_category->category_name=$request->category_name;
        $obj_category->category_slug=Str::slug($request->category_name);
        $obj_category->save();
        Toastr::info('Category has been Updated!','Updated');
    //  $datas=Servicearea::latest()->get();

    // return view('backend.admin.area.index',compact('datas'));

    return redirect()->route('admin.category.index');
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

        $obj_category=Category::find($id)->delete();
Toastr::warning('Category has been Deleted!','Deleted');

    return redirect()->route('admin.category.index');

    }
}
