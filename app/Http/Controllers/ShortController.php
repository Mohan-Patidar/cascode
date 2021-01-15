<?php

namespace App\Http\Controllers;
use App\Models\Expertise;
use App\Models\Short;
use Illuminate\Http\Request;
use Session;
use DB;
use Redirect;

class ShortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experts = Expertise::get();
        $shorts = Short::get();
        
        return view('admin.short.index',compact(['shorts','experts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $experts = Expertise::all();
        
        return view('admin.short.create',compact("experts"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        switch($request->input('save')){
        case 'saveclose':
           $request->validate([
              'short_code' => 'required',
              'value' => 'required',
              'description' => 'required',
            
            ]);
            $short = new Short;
            $short->expertise_id = $request->expertise_id;
            $short->short_code = $request->short_code;
            $short->value = $request->value;    
            $short->description = $request->description;  
        
            $short->save();
            Session::flash('message', 'data store successfuly!');
            return redirect('shorts');
            break;
        case 'saveadd':
            $request->validate([
            'short_code' => 'required',
            'value' => 'required',
            'description' => 'required',
            
        ]);
            $short = new Short;
            $short->expertise_id = $request->expertise_id;
            $short->short_code = $request->short_code;
            $short->value = $request->value;    
            $short->description = $request->description;  
        
            $short->save();
            Session::flash('message', 'data store successfuly!');
            return Redirect::back();
           
        }
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
    public function edit($short)
    { 
        $experts = Expertise::get();
        $short = Short::where("id", "=", $short)->first();
        return view('admin.short.edit',compact('short','experts'));   
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
            'short_code' => 'required',
            'value' => 'required',
            'description' => 'required',
            
        ]);
        $short =Short::where("id", "=", $id)->first();
        $short->expertise_id = $request->expertise_id;
        $short->short_code = $request->short_code;
        $short->value = $request->value;    
        $short->description = $request->description;  
        $short->update(); 
        Session::flash('message', ' data updated successfuly!');
       return redirect('shorts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request)
    {
        $id = $request->all();
        Short::destroy($id);
    }
}
