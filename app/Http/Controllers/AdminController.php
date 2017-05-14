<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Contollers\EmployeeController;
use App\Http\Controllers\UserController;

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

    public function addnew(array $data){
      $jimmy = validator($data);
      if ($jimmy) {
        $jimmy2 = create($data);
      }else {
        echo "error with validation";
      }
      if($jimmy2){
        echo "success!";
      }else {
        echo "error creating user";
      }
    }
}
