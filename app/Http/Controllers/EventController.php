<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\File;
class EventController extends Controller
{
  // /**
  // * Constructor
  // *
  // * @return \Illuminate\Http\Response
  // */
  // public function __construct()
  // {
  //   $this->middleware('auth')->except(['index']);
  // }
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    //display all events
    $events=Event::all();
    return view('events.show',compact('events'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //


  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $event=new Event();
    $user_id=auth()->user()->id;
    $event->user_id=$user_id;
    $event->title=request('title');
    $event->description=strip_tags(request('description'));
    $event->category_id=request('category');
    $event->location=request('location');
    $event->capacity=request('capacity');
    $event->special_guests=request('special_guests');
    $event->date=request('date');
    $event->sales_start_time=request('sales_start_time');
    $event->sales_end_time=request('sales_end_time');
    $event->sales_start_date=request('sales_start_date');
    $event->sales_end_date=request('sales_end_date');
    $event->price=request('price');
    // $event->venue=request('venue');
    // $event->ticket_type=request('ticket_type');
    $event->host=request('host');
    $event->theme=request('theme');
    $event->event_giveaways=request('giveaways');
    if ($request->hasfile('event_cover')) {
      // code...
      $file=$request->file('event_cover');
      $destinationPath='images/';
      $extension = $file->getClientOriginalExtension();
      $filename=time().".".$extension;
      $file->move($destinationPath,$filename);
      $event->image=$filename;

    }
    if ($event->save()) {
      return redirect()->back()->with('success','Event created successfully!!');
    }
    else {
      return redirect()->back()->with('error','Error occurred while creating event!!');
    }
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request)
  {
    $data = request()->except(['_token','id']);
    $updates = array_filter($data);
    $event = Event::where('id','=',$request->id)->first();

  }
  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show()
  {
    //get id
    $events=Event::all();
    // $id=$_GET['eventId'];
    // print_r($id).exit;
    return redirect()->route('events.display')->with('events',$events);
  }
  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function singleEvent($id)
  {
    //get id
    $event=Event::find($id);
    // $id=$_GET['eventId'];
    // print_r($id).exit;
    return view('events.single')->with('event',$event);
  }
  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy(Request $request)
  {
    $event = Event::where('id','=',$request->id)->first();

    if ($event != null) {
      $event->update($updates);
      return redirect()->back()->with('success','Event successfully updated!!');
    }
    else {
      return redirect()->back()->with('error','Error occurred while updating event!!');
    }
  }
}
