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

    public function models(){
      return $this->belongsTo('App\Makes');
    }
}
