<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;
use MaddHatter\LaravalFulcalendar\Facades\Calendar;

class eventcontroller extends Controller
{public function getevent(){
    $events=event::all();
    $event=[];
   
    foreach($events as $row){
        //$enddate=$row->end_date."24:00:00";
        $event[]=\Calendar::event(
            $row->title,
            false,
            
            new \DateTime($row->start_date),
            new \DateTime($row->end_date), 
            $row->id,
            [
                'color'=> $row->color,

            ]
            );
        
        

    }
    $calendar= \Calendar::addEvents($event);

    return view('admin.views.time',compact('events','calendar'));
}
public function display(){
    return view('admin.views.addevent');
}
public function store(Request $request){
    $events=new event;
    $events->title=$request->input('title');
    $events->color=$request->input('color');
   
    $events->start_date=$request->input('start_date');
    $events->end_date=$request->input('end_date');
   
    $events->NO_Of_users=$request->input('No_Of_user');
    $events->save();
    return redirect('time');


}
public function showtime(){
    $events=event::all();
       return view('admin.views.timebook')->with('events',$events);
   }
public function show(){
 $events=event::all();
    return view('admin.views.display')->with('events',$events);
}
public function del($id){
    $events=event::find($id);
    $events->delete();
    return redirect()->back();

}
public function search(Request $request){
    $search=$request->get('search');
$events=event::where('title','like', '%'.$search.'%')->paginate(5);
return view('admin.views.timebook')->with('events',$events);
    
}
}