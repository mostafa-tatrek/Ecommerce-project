<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
 use App\Models\User;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class Homecontroller extends Controller
{
    public function index()
    {

      return view('home.userpage');

    }
    
    public function redirect()
    {

        $usertype= Auth::user()->usertype;
        if($usertype=='1'){
           return view('admin.admindash');}
           else{
            return view ('home.userpage');


           }


   }

}
