<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\report;

class reportcontroller extends Controller

{
    public function store(Request $request){
     
    
        $rep=new report();
        $rep->first_name=$request->fname;
        $rep->last_name=$request->lname;
        $rep->address=$request->address;
        $rep->age=$request->age;
        $rep->gender=$request->gender;
        $rep->package=$request->package;
        $rep->period=$request->period;
        $rep->completed_hours=$request->hours;
        $rep->Remaining_hours=$request->hours2;
        $rep->status=$request->status;
        $rep->save();
       
        return redirect()->back();
    }
 
   
}
