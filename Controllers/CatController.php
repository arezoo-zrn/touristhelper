<?php

namespace App\Http\Controllers;

use DB;
use App\items;

use Illuminate\Http\Request;

class CatController extends Controller
{

  public function show_items($cat_id){
  $items = DB::table('items')->where('cat_int','=',$cat_id)->get();
  return view('items',['items'=>$items]);
  }
  public function see_other(){
    return view('seeOther');
  }





}
