<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expertise;
use App\Models\Short;
use App\Models\Title;
class FrontendController extends Controller
{
    public function index() {
        
        $experts = Expertise::get();
        $shorts = Short::get();
        $exp = Expertise::inRandomOrder()->limit(5)->get();
        $names = Title::where('id', 1)->value('title');
        return view('frontend.home',compact(['shorts','experts','exp','names']));
    }



}
