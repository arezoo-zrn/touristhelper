<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\category;
use App\items;
use App\city;
use App\adv;
use App\users;
use App\offer;

class UsersController extends Controller
{
    public function users_register(){
      return view('Register');

    }
    public function Registered(Request $request){
      $temp = new users();
      $temp->name = $request->name;
      $temp->user_name = $request->user_name;
      $temp->password = $request->password;
      $temp->livingCity = $request->livingCity;

      $temp->city_id = 0;

      $temp->role = "tourist";
      $temp->save();
      return "registered";
    }

    public function login(){
      return view('login');

    }
    public function LoggedIn(Request $request){
      $user = $request->input('user_name');
      $pass = $request->input('password');
      $data = DB::select('select * from user where user_name=? and password=?', [$user,$pass]);


      if($data[0]->role ==="admin" ){
        return view('PanelAdmin',['data'=>$data]);
      }
      return view('userLoged');



    }

    public function PanelAdmin(){
      return view('PanelAdmin');
    }
    public function AddCat(){

      return view('addCat');
    }
    public function saveCat(Request $request){
      $temp = new category();
      $temp->name = $request->name;
      $temp->item_id = 0;
      $temp->save();
      return "Category Added!";

    }
    public function AddItemToCat(){
      $cats = DB::table('category')->get();
      $city = DB::table('city')->get();
      return view('addItem',['cats'=>$cats],['city'=>$city]);

    }
    public function saveItem(Request $request){
      $temp = new items();
      $temp->name = $request->name;
      $temp->pic = $request->pic;
      $temp->describe = $request->describe;
      $temp->price = $request->price;
      $temp->cat_int = $request->cat_int;
      $temp->city_id = $request->city_id;
      $temp->save();

      return "addedToItems!";
    }
    public function RemoveCat(){
      $cats = DB::table('category')->get();
      return view('RemoveCategory',['cats'=>$cats]);
    }
    public function RemovedCat(Request $request){
      $cats = DB::table('category')->where('cat_id','=',$request->cat_id)->delete();
      $items = DB::table('items')->where('cat_int','=',$request->cat_id)->delete();
      return "deleted!";

    }
    public function RemoveItemFromCat(){
      $items = DB::table('items')->get();
      return view('RemoveItemFromCat',['items'=>$items]);
    }
    public function RemovedItem(Request $request){
      $items = DB::table('items')->where('item_id','=',$request->item_id)->delete();
      return "deleted!";

    }
    public function AddAdversite(){
      return view('AddAdv');
    }
    public function addedAdvr(Request $request){
      $temp = new adv();
      $temp->name = $request->name;
      $temp->description = $request->description;
      $temp->pic = $request->pic;
      $temp->other_id = 0;
      $temp->save();
      return "added advertise!";
    }

    public function OfferToTourist(){
      $cats = DB::table('category')->get();
      $city = DB::table('city')->get();
      $item = DB::table('items')->get();
      return view('offer',['cats'=>$cats, 'city'=>$city,'item'=>$item]);
    }
    public function Offered(Request $request){
      $temp = new offer();
      $temp->cat_id = $request->cat_id;
      $temp->city_id = $request->city_id;
      $temp->item_id =$request->item_id;
      $temp->save();
      return "offerd";
    }

}
