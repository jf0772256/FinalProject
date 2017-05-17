<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


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

  //do insert of new model and attach to a to the wonderful database
  public function addnew(Request $request){
    $newModel = $request->all();
    $nmAssoc = $newModel['nmMake'];
    $nmModel = $newModel['newModel'];

    if ($nmAssoc == -1) {
      //do nothing non valid user selected
    }else{
      $q = DB::table('models')->insert(
        ['make' => $nmModel, 'makeAssoc' => $nmAssoc]
      );
    }
    return redirect()->route('admin');
  }
}
