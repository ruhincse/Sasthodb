<?php

namespace App\Http\Controllers\Admin;

use App\Model\User;
use App\Model\Agentinfo;
use App\Model\Servicearea;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=Agentinfo::with('user','area')->latest()->get();
        $areas=Servicearea::latest()->get();

        return view('backend.admin.agent.index',compact('datas','areas'));
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

                'first_name'=>'required',
                'last_name'=>'required',
                'email_addr'=>'required|unique:users,email',
                'agent_pass'=>'required',
                'org_name'=>'required',
                'org_area'=>'required',
                'org_mobile'=>'required',
                'org_address'=>'required'


        ],[
                'org_area.required'=>'Please Select Organizaition Area'

        ]);

        // dd($request->all());


        $obj_user=new User;

        $obj_user->first_name=$request->first_name;
        $obj_user->last_name=$request->last_name;
        $obj_user->email=$request->email_addr;
        $obj_user->role_id=3;
        $obj_user->password=bcrypt($request->agent_pass);
        $obj_user->save();

        $obj_agent=new Agentinfo;

         $obj_agent->org_name=$request->org_name;
         $obj_agent->area_id=$request->org_area;
         $obj_agent->user_id=$obj_user->id;
         $obj_agent->org_mobile=$request->org_mobile;
         $obj_agent->org_address=$request->org_address;
         $obj_agent->save();


         Toastr::success('Agent has been created!','Created');

         
        return redirect()->route('admin.agent.index');

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
       

        $obj_agent=Agentinfo::find($id);

         $obj_agent->org_name=$request->org_name;
         $obj_agent->area_id=$request->org_area;
         $obj_agent->org_mobile=$request->org_mobile;
         $obj_agent->org_address=$request->org_address;
         $obj_agent->save();


         $obj_user=User::find($obj_agent->user_id);

         $obj_user->first_name=$request->first_name;
         $obj_user->last_name=$request->last_name;
         $obj_user->email=$request->email_addr;
         $obj_user->role_id=3;

         if($request->agent_pass){
            $obj_user->password=bcrypt($request->agent_pass);
         }
         
         $obj_user->save();


         Toastr::info('Agent has been Updated!','Updated');

         
        return redirect()->route('admin.agent.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $obj_agent=Agentinfo::find($id);

        User::find($obj_agent->user_id)->delete();

        $obj_agent->delete();

        Toastr::warning('Agent has been Deleted!','Deleted');
        return redirect()->route('admin.agent.index');
    }
}
