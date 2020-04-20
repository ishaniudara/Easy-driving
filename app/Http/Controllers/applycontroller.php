<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\apply;

class applycontroller extends Controller
{
    //validate inputs
    public function store(Request $request){
        $this->validate($request,[
            'fname' => 'required|string|max:10',
            'lname'=>'required|string|max:10',
            'address'=>'required|string|max:10',
            'age'=>'required|int',
            'gender'=>'required',
            'package'=>'required',
            'period'=>'required',
         


        ]
        
    );
     
  //save inputs in database
        $app=new apply();
        $app->first_name=$request->fname;
        $app->last_name=$request->lname;
        $app->address=$request->address;
        $app->age=$request->age;
        $app->gender=$request->gender;
        $app->package=$request->package;
        $app->period=$request->period;
        
        $app->save();
        $data=apply::all();
        return redirect()->back();

}

//return inputs from the database
public function add(Request $request){ 
    $app=new apply();
    $app->first_name=$request->fname;
    $app->last_name=$request->lname;
    $app->address=$request->address;
    $app->age=$request->age;
    $app->gender=$request->gender;
    $app->package=$request->package;
    $app->period=$request->period;
    $app->save();
    $data=apply::all();
    return redirect()->back()->with('success','Apply is done.');

}

}
