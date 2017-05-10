<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    protected function getCategories(){
      $cat_vals=[];
      $cat_vals = DB::table('categories')->pluck('categoryType');
      var_dump($cat_vals);
    }
}
