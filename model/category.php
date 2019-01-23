<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'category';

    public static function showCat(){

      return true;
    }
    public static function showitems($cat_id){

      return view('/');
    }
}
