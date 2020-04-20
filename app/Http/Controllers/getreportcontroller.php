<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\report;
use DB;
class getreportcontroller extends Controller
{
    public function getdata(){
        $rep=report::all();
        return view('admin.views.report')->with('report',$rep);

    }
    public function viewdata($id){
        $rep=report::find($id);
        return view('admin.views.viewrep')->with('data',$rep);

    }
    public function search(Request $request){
        $search=$request->get('search');
$rep=report::where('first_name','like', '%'.$search.'%')
->orwhere('status','like', '%'.$search.'%')->paginate(5);
return view('admin.views.report')->with('report',$rep);
        
    }
    public function del($id){
        $report=report::find($id);
        $report->delete();
        return redirect()->back();

    }
    public function edapp($id){
        $report=report::find($id);
        return view('admin.views.editapp')->with('editdata',$report);
    }
    public function editrep(Request $request){
        $id=$request->id;
        $first_name=$request->fname;
        $last_name=$request->lname;
        $address=$request->address;
        $age=$request->age;
        $gender=$request->gender;
        $package=$request->package;
        $period=$request->period;
        $completed_hours=$request->chours;
        $Remaining_hours=$request->rhours;
        $status=$request->status;
        $data=report::find($id);
        
        $data->first_name=$first_name;
        $data->last_name=$last_name;
        $data->address=$address;
        $data->age=$age;
        $data->gender=$gender;
        $data->package=$package;
        $data->period=$period;
        $data->completed_hours=$completed_hours;
        $data->Remaining_hours=$Remaining_hours;
        $data->status=$status;
        $data->save();
        return redirect()->back();
        



    }
 
}
