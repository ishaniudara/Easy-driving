<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\enqury;

class enquirycontroller extends Controller
{
    
    public function storeenquiry(Request $request){
        $this->validate($request,[
            'id' => 'required',
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
           
           


        ]
        
    );
    
     
    
        $enq=new enqury;
        $enq->id=$request->id;
        $enq->name=$request->name;
        $enq->email=$request->email;
        $enq->subject=$request->subject;
        $enq->message=$request->message;
       
        $enq->save();
        
        return redirect()->back();

}

  
}
