<?php

namespace App\Http\Controllers;
use App\Models\Expertise;
use Illuminate\Http\Request;
use Session;
use DB;

class ExpertiseareaController extends Controller
{
    public function index(){
        $experts = Expertise::get();
        return view('admin.expert.index',compact("experts"));
    }

    public function create(){
        return view('admin.expert.create');
    }
    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            
           
            
        ]);

        $experts= new Expertise;
        $experts->name=$request->name;
        $experts->description=$request->description;    
        
        $experts->save();
        Session::flash('message', 'Expertise area added successfuly!');
       
        return redirect('experts');

    }
     public function show($id)
    {
    
       //
    
    }
    public function edit($expert){
       
        $expert = Expertise::where("id", "=", $expert)->first();
    
        return view('admin.expert.edit',compact('expert'));        
    }

    public function update(Request $request ,$id){
       
        $request->validate([
            'name' => 'required',
        ]);
        $expert =Expertise::where("id", "=", $id)->first();
        $expert->name=$request->name; 
        $expert->description=$request->description;     
        $expert->update(); 
        Session::flash('message', ' data updated successfuly!');
        return redirect('experts');

    }
    public function destroy(request $request){
        $id = $request->all();
        Expertise::destroy($id);
        // Session::flash('message', ' data delete successfuly!');
       

    }
}
