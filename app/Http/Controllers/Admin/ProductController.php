<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Category;
use App\Model\Servicearea;
use App\Model\Agentinfo;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=Product::latest()->get();
        $categories=Category::latest()->get();
        $areas=Servicearea::latest()->get();
        $agents=Agentinfo::with('user','area')->latest()->get();

        return view('backend.admin.product.index',compact('datas','categories','areas','agents'));

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
        // return $request->all();

        $request->validate([

                    'product_name'=>'required',
                    'category_id'=>'required',
                    'price'=>'required',
                    'dis_price'=>'required'                         
          ]);

          

        if($request->file('pro_image')){

            $image=$request->file('pro_image'); 
            $image_ext=$image->getClientOriginalExtension();

            $rand='product'.mt_rand();
            $time= (int) (time()/3600);

            $img_name=$rand.$time.'.'.$image_ext;

            $image->move('product/',  $img_name);
          



        }else{
            $img_name="";
           
        }

        $obj_pro=new Product;

        $obj_pro->product_name=$request->product_name;
        $obj_pro->product_slug=Str::slug($request->product_name);
        $obj_pro->category_id=$request->category_id;
        $obj_pro->product_short_desc=$request->pro_short_desc;
        $obj_pro->product_desc=$request->pro_desc;
        $obj_pro->product_price=$request->price;
        $obj_pro->product_dis_price=$request->dis_price;
        $obj_pro->product_image=$img_name;
        $obj_pro->save();
        Toastr::success('Product has been created!','Created');

        return redirect()->route('admin.product.index');



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

        $obj_pro= Product::find($id);

if($request->file('pro_image')){

    unlink('product/'.$obj_pro->product_image);
    $image=$request->file('pro_image'); 
    $image_ext=$image->getClientOriginalExtension();

    $rand='product'.mt_rand();
    $time= (int) (time()/3600);

    $img_name=$rand.$time.'.'.$image_ext;

    $image->move('product/',  $img_name);
  



}else{
    $img_name=$obj_pro->product_image;
   
}



$obj_pro->product_name=$request->product_name;
$obj_pro->product_slug=Str::slug($request->product_name);
$obj_pro->category_id=$request->category_id;
$obj_pro->product_short_desc=$request->pro_short_desc;
$obj_pro->product_desc=$request->pro_desc;
$obj_pro->product_price=$request->price;
$obj_pro->product_dis_price=$request->dis_price;
$obj_pro->product_image=$img_name;
$obj_pro->save();
Toastr::info('Product has been Updated!','Updated');

return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj_pro= Product::find($id);
unlink('product/'.$obj_pro->product_image);
            $obj_pro->delete();



            Toastr::warning('Product has been Deleted!','Deleted');

            return redirect()->route('admin.product.index');

    }
}
