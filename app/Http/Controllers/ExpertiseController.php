<?php

namespace App\Http\Controllers;
use App\Models\Expertise;
use Illuminate\Http\Request;

class ExpertiseController extends Controller
{
    public function index(){
        return view('expertises.index');
     }
      /*
       AJAX request
       */
      public function getExpertises(Request $request){
    
        $search = $request->search;
    
        if($search == ''){
           $expertises = Expertise::orderby('name','asc')->select('id','name')->get();
        }else{
           $expertises = Expertise::orderby('name','asc')->select('id','name')->where('name', 'like', '%' .$search . '%')->limit(5)->get();
        }
    
        $response = array();
        foreach($expertises as $expertise){
           $response[] = array(
                "id"=>$expertise->id,
                "text"=>$expertise->name   
           );
        }
    
        echo json_encode($response);
        exit;
     }
}
