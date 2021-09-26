<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class AdminController extends Controller
{
    public function profile(){
        return view('admin.profile');
    }

    public function index(){
        return view('admin.index');
    }

    public function home_edit(){
        $about = DB::table('sections')->where('name','=','about')->first();
        $event = DB::table('sections')->where('name','=','event')->first();
        $digital = DB::table('sections')->where('name','=','digital')->first();
        $create = DB::table('sections')->where('name','=','create')->first();
        $art = DB::table('sections')->where('name','=','art')->first();
        $contact = DB::table('sections')->where('name','=','contact')->first();

        return view('admin.home-edit', [
            'about' => $about,
            'event' => $event,
            'digital' => $digital,
            'create' => $create,
            'art' => $art,
            'contact' => $contact
        ]);
    }

    public function gallery(){
        return view('admin.gallery');
    }
}
