<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\catagory;
use App\models\prodact;

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
  public function view_prodact(  ){
    $date = catagory::all();
    return value('admin.prodact',compact('catagory'));
  }
  public function add_prodact(Request $request ){
    $prodact = new prodact();
    $prodact->title = $request->title;
    $prodact->descriptiom = $request->descriptiom;
    $prodact->category = $request->category;
    $prodact->quantity = $request->quantity;
    $prodact->price = $request->price;
    $prodact->discount = $request->discount;
    $image = $request->image;
    $imagename= time().'.'.$image->getClientOriginalExtension();
    $request->image->move('prodact',$imagename);
    $prodact->image = $imagename;
    $prodact->save();
    return redirect()->back();
  }
  public function show_prodact(){
    $prodact = catagory::all();
    return value('admin.show_prodact',compact('prodact'));
  }
  public function update_prodact($id){
    $prodact =prodact::find($id);
    $catagory = catagory::all();
return view('admin.update_prodact',compact('prodact','catagory'));

  }
  public function delete_prodact($id){
    $prodact =prodact::find($id);
    $prodact->delete();
    return redirect()->back();
     }
     public function upate_prodact_confirm($id,Request $request){
      $prodact =prodact::find($id);
      $prodact->title = $request->title;
      $prodact->descriptiom = $request->descriptiom;
      $prodact->category = $request->category;
      $prodact->quantity = $request->quantity;
      $prodact->price = $request->price;
      $prodact->discount = $request->discount;
      $image = $request->image;
      if( $image){
      $imagename= time().'.'.$image->getClientOriginalExtension();
      $request->image->move('prodact',$imagename);
      $prodact->image = $imagename;
      }
      $prodact->save();
      return redirect()->back();



     }
}
