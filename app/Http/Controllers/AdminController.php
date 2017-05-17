<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Contollers\EmployeeController;
use App\Http\Controllers\UserController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function logincheck(){
      $id = auth()->id();
      $role = auth()->user($id)->roleID;
      if ($role == 3) {
        return redirect()->route('user');
      }elseif ($role == 2) {
        return redirect()->route('employee');
      }elseif ($role == 1){
        return redirect()->route('admin');
      }
    }
    public function Dashboard(){
      //check if logged in user is admin or other and redirect
      return view('admin');
    }

    public function addnew(Request $request){
      $newEmployee = $request->all();
      $userIDs = $newEmployee['userslist'];
      if ($userIDs == -1) {
        //do nothing non valid user selected
      }else{
        $q = DB::table('users')->where('id',$userIDs)->update(['roleID' => 2]);
      }
      return redirect()->route('admin');
    }

    //do insert of new model and attach to a to the wonderful database
    public function addnewmodel(Request $request){
      $newModel = $request->all();
      $nmAssoc = $newModel['nmMake'];
      $nmModel = $newModel['newModelName'];
      if ($nmAssoc == -1) {
       //do nothing non valid user selected
      }else{
        if($nmAssoc > -1){
         $q = DB::table('models')->insert(['model' => $nmModel, 'makeAssoc' => $nmAssoc]);
        }
      }
          return redirect()->route('admin');
    }

    public function models($id){
      return Model_Partial::whereMakeID($id)->get();
    }
}
