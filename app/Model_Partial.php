<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Model_Partial extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'model', 'makeAssoc',
    ];
    //populate models does require that there be a make to attach to...
    public static function getAvailModels($sName, $makeSel){
      $data = DB::table('models')->select('model','id')->where([['active','=',true],['makeAssoc','=',$makeSel]])->get();
      echo "<div class='form-group'><select name='$sName'>";
      echo "<option value='-1'>Select A Make</option>";
      foreach ($data as $value) {
        $ids = $value->id;
        $make = $value->make;
        echo "<option value='$ids'>$make</option>";
      }
      echo "</select>";
      echo "</div>";
      echo "<button type='button' class='btn btn-primary' data-toggle='collapse' data-target='#addmodel' aria-expanded='false' aria-controls='addmodel'>Add New Model</button>";
    }
}
