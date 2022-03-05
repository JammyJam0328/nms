<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdviserController extends Controller
{
    
    public function section($id){
        return view('adviser-pages.my-section',['id'=>$id]);
    }
    public function student($id){
        return view('adviser-pages.student-bmi',['id'=>$id]);
    }
}
