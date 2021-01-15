<?php

namespace App\Http\Controllers;
use App\Models\Short;
use App\Models\Expertise;
use App\Models\Title;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    
    
    public function getshort(request $request) {

        $id = $request->all();
        // $experts = Expertise::find($id);
        
        #create or update your data here
        // $shorts = Short::find($id);
       
        $shorts = Short::where('expertise_id', $id)->get();
        
        $ex_id = $shorts[0]->expertise_id;
        $experts = Expertise::find($ex_id);
      
        return response()->json(['shortdata'=>$shorts,'expertdata'=>$experts]);
    }
    
    public function title(request $request) {
        $id = $request->id;
        $closer = Title::find($id);
        $closer->title=$request->title;
        $closer->update();
        return response()->json($id);
    }
    public function gettitle(request $request) {
        $id = $request->id;
        $closer = Title::find($id);
        $get = $closer->title;
        
        return response()->json($get);
    }



    
}
