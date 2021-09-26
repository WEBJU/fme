<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Section;

use DB;

class HomeController extends Controller
{
    public function index(){

        $about = DB::table('sections')->where('name','=','about')->first();
        $event = DB::table('sections')->where('name','=','event')->first();
        $events=Event::all();
        $digital = DB::table('sections')->where('name','=','digital')->first();
        $create = DB::table('sections')->where('name','=','create')->first();
        $art = DB::table('sections')->where('name','=','art')->first();
        $contact = DB::table('sections')->where('name','=','contact')->first();

        return view ('welcome', [
            'about' => $about,
            'events'=>$events,
            'event' => $event,
            'digital' => $digital,
            'create' => $create,
            'art' => $art,
            'contact' => $contact
        ]);
    }

    public function about(){
        return view('about');
    }

    public function blog(){
        return view('blog');
    }

    public function contact(){
        return view('contact');
    }

    public function categories(){
        return view('categories');
    }


}
