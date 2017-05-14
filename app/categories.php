<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //we need to get all the categories from the database and display them in a drop box for the admin to select from
    // to do this we wil use non chainable linking as this was causing compatibility issues.

    public static function makeSelectorCat($sName){
      //the function that should make and then return the selector drop box.
      $iCnt = 0;
      $data = DB::table('categories')->select('categoryType')->get();
      echo "<div class='form-group'><select name='$sName'>";
      echo "<option value='-1'>Select A Category</option>";
      foreach ($data as $value) {
        $item = $value->categoryType;
        echo "<option value='$iCnt'>$item</option>";
        $iCnt++;
      }
      echo "</select></div>";
    }
}
