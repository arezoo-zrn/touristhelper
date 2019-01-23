<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\offer;
use DB;

class offerController extends Controller
{
  public function seeOffer(){
    $offers = DB::table('offer')->get();
    $city = DB::table('city')->get();
    $item = DB::table('items')->get();
    return view('seeoffers', ['offers'=>$offers, 'city'=>$city, 'item'=>$item]);
  }


}
