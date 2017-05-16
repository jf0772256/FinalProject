<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    // we are assuming that we will be using this section to build a selection
    //first function we will want to use is the static builders
    public static function getAllMakes($sName){
      $data = DB::table('makes')->select('make','id')->where('active',true)->get();
      echo "<div class='form-group'><select name='$sname'>";
      echo "<option value='-1'>Select A Make</option>";
      foreach ($data as $value) {
        $ids = $value->id;
        $make = $value->make;
        echo "<option value='$ids'>$make</option>";
      }
      echo "</select></div>";
    }

    //populate models does require that there be a make to attach to...
    public static function getAvailModels($sName, $makeSel){
      
    }
}
