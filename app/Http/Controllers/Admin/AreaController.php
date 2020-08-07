<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Model\Servicearea;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=Servicearea::latest()->get();

        return view('backend.admin.area.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.admin.area.index');
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

            'area_name'=>'required|unique:serviceareas,area_name'
        ]);

            $obj_service=new Servicearea;
            $obj_service->area_name=$request->area_name;
            $obj_service->area_slug=Str::slug($request->area_name);
            $obj_service->save();
            Toastr::success('Area has been created!','Created');
        //  $datas=Servicearea::latest()->get();

        // return view('backend.admin.area.index',compact('datas'));

        return $this->index();

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
        //

        $obj_service=Servicearea::find($id);
        $obj_service->area_name=$request->area_name;
        $obj_service->area_slug=Str::slug($request->area_name);
        $obj_service->save();
        Toastr::info('Area has been Updated!','Updated');
    //  $datas=Servicearea::latest()->get();

    // return view('backend.admin.area.index',compact('datas'));

    return $this->index();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Servicearea::where('area_slug',$id)->delete();

        Toastr::warning('Area has been Deleted!','Deleted');
        return $this->index();

    }
}
