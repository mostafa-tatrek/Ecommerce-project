<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
 use App\Models\User;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\models\prodact;
use App\models\cart;

class Homecontroller extends Controller
{
    public function index()
    {
      $prodact= prodact::all();

      return view('home.userpage',compact('prodact'));

    }
    
    public function redirect()
    {

        $usertype= Auth::user()->usertype;
        if($usertype=='1'){
           return view('admin.admindash');}
           else{
            $prodact= prodact::all();
            return view('home.userpage',compact('prodact'));
           }
   }
   public function prodact_details($id)
   {
    $prodact = prodact::find($id);
 
      return view('home.prodact_details',compact('prodact'));
}
public function add_card($id,Request $request){
 if(Auth::id()){
  $user=Auth::user();
  $prodact = prodact::find($id);
 $cart= new cart();
 $cart->name = $user->name;
 $cart->email = $user->email;
 $cart->phone = $user->phone;
 $cart->adress = $user->adress;
 $cart->user_id = $user->id;
 $cart->prodact_title = $prodact->title;
 if ($prodact->discount!=null ){
  $cart->price = $prodact->discount* $request->quantity;
 }else{
  $cart->price = $prodact->price* $request->quantity;
 }
 $cart->image = $prodact->image;
 $cart->prodact_id= $prodact->id;
 $cart->prodact_title = $request->quantity;
 $cart->save();
 return redirect()->back();


 
 }
 else{
return redirect('login');

 }
 

}


}
