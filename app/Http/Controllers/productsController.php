<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class productsController extends Controller
{

  public function cars()
  {
    return view('products/cars');
  }

  public function trucks()
  {
    return view('products/trucks');
  }
  public function suv()
  {
    return view('products/suv');
  }
  public function compacts()
  {
    return view('products/compacts');
  }
  public function electric()
  {
    return view('products/electric');
  }
}
