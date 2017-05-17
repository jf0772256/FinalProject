<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makes extends Model
{
    //
    public function models(){
      return $this->hasMany('App\Model_Partial');
    }
}
