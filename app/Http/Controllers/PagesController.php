<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PagesController extends Controller
{
    public function home(){

    	return view('dashboard');
    }

    public function show(){
    	$show = DB::table('event')->get();

        //return $show;
    	return view('show',compact('show'));
    }

    public function create(){

    	return view('create');
    }

    public function view($id){
    	$result = DB::table('event')->find($id);


    	return view('event');
    }
}
