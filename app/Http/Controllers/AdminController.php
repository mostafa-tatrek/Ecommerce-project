<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\catagory;

class AdminController extends Controller
{
   public function view_category(){

    $date = catagory::all();

     return view('admin.category',compact('date'));
     

   }
   public function add_category(Request $request ){

    $date = new catagory();
    $date->catagory_name= $request->name;
    $date->save();
    return redirect()->back()->with('message','catgoryadd succes');
  }
  public function catagory_delete( $id ){

    
    $date=catagory::find($id);
    $date->delte();
    return redirect()->back();
  }
}
