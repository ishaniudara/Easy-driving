<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bok;
use DB;

class bookcontroller extends Controller
{//validate inputs
    public function store(Request $request){
        $this->validate($request,[
            'email' => 'required',
            
            'tutor'=>'required',
            'date'=>'required',
            'time'=>'required',
           


        ]
        
    );
    
        $bk=new bok;
        $bk->email=$request->email;
      
        $bk->tutor=$request->tutor;
        $bk->date=$request->date;
        $bk->time=$request->time;
       
        $bk->save();
        
        return redirect()->back();

    }
    //join tables with email address
    public function getbook(){
        //$bk=book::all();
        //return view('admin.views.appointments')->with('book',$bk);
$data= DB::table('boks')
->join('users','users.email','=', 'boks.email')
->select('users.phone','boks.tutor','boks.time','boks.date','boks.id','users.name')
->get();
return view('admin.views.appointments',compact('data'));
}

//delete appointements
public function delapp($id){
    $data=bok::find($id);
    $data->delete();
    return redirect()->back();

}

public function search(Request $request){
    $data = bok::latest() 
    ->join('users', 'users.email', '=', 'boks.email') 
    ->select('users.phone','boks.tutor','boks.time','boks.date','boks.id','users.name')
    ->where('users.name','like', '%'.$search.'%')
    
    ->get();
return view('admin.views.appointments',compact('data'));

    
}  
}
