<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\apply;

class getcontroller extends Controller
{
    public function getdata(){
        $orders=apply::all();
        return view('admin.views.user')->with('orders',$orders);

    }
    //delete user
    public function deluser($id){
        $orders=apply::find($id);
        $orders->delete();
        return redirect()->back();

    }
    //view user 
    public function vwuser($id){
        $orders=apply::find($id);
        return view('admin.views.viewuser')->with('editdata',$orders);
    }
    //edit user details
    public function eduser($id){
        $orders=apply::find($id);
        return view('admin.views.edituser')->with('editdata',$orders);
    }
    public function edituser(Request $request){
        $id=$request->id;
        $first_name=$request->fname;
        $last_name=$request->lname;
        $Address=$request->address;
        $age=$request->age;
        $gender=$request->gender;
        $package=$request->package;
        $period=$request->period;
        $data=apply::find($id);
        
        $data->first_name=$first_name;
        $data->last_name=$last_name;
        $data->Address=$Address;
        $data->age=$age;
        $data->gender=$gender;
        $data->package=$package;
        $data->period=$period;
        $data->save();
        $datas=apply::all();
        return view('admin.views.user')->with('orders',$datas);



    }
    //serach user by name function 
    public function search(Request $request){
        $search=$request->get('search');
    $datas=apply::where('first_name','like', '%'.$search.'%')->paginate(5);
    return view('admin.views.user')->with('orders',$datas);
        
    }
 
}
