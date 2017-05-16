<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function getAllUsers($sName){
      // like with categories, we are building a select box for users with role of 3
      $data = DB::table('users')->select('name','id')->where('roleID',3)->get();
      echo "<div class='form-group'><select name='$sName'>";
      echo "<option value='-1'>Select A User</option>";
      foreach ($data as $value) {
        $item = $value->name;
        $iCnt = $value->id;
        echo "<option value='$iCnt'>$item</option>";
        $iCnt++;
      }
      echo "</select></div>";
    }

    public function updateUserSelected(){
      //
    }
}
