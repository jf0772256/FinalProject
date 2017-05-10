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
      return $this;
    }

    protected function buildSelector($data){
      //returns the internals of the selector
      return $this;
    }

    protected function createSelector($selectorName){
        return $this;
    }

    protected function closeSelector(){
      return $this;
    }
}
