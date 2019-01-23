<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\city;
use App\other;

class cityController extends Controller
{
    public function seeplaces(){
      $place = DB::table('city')->get();
      return view('SeePlaces', ['place'=>$place]);
    }
    public function show_items($city_id){
    $items = DB::table('items')->where('city_id','=',$city_id)->get();
    return view('items',['items'=>$items]);
    }
    public function see_other(){
      $place = DB::table('city')->get();
      $other = DB::table('other')->get();
      return view('seeOther',['other'=>$other]);
    }
}
