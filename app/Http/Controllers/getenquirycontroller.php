<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\enqury;

class getenquirycontroller extends Controller
{
    public function getenquiry(){
        $enq=enqury::all();
        return view('admin.views.enquriy')->with('en',$enq);

    }
    public function deluser($id){
        $enq=enqury::find($id);
        $enq->delete();
        return redirect()->back();

    }
}
