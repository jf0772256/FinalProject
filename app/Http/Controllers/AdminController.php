<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Contollers\EmployeeController;
use App\Http\Controllers\UserController;

class AdminController extends Controller
{
    //
    public function logincheck(){
      $id = auth()->id();
      $role = auth()->user($id)->roleID;
      if ($role == 0) {
        return redirect()->route('user');
      }elseif ($role == 2) {
        return redirect()->route('employee');
      }else{
        return redirect()->route('admin');
      }
    }
    public function Dashboard(){
      //check if logged in user is admin or other and redirect
      return view('admin');
    }
}
