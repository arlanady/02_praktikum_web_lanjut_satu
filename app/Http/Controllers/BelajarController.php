<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function form(){
        return view('form'); // memanggil view form
      }
      
      public function getProfile(Request $request){
        $data = $request->kata; // menampung parameter kata
        return view('profile',compact('data')) //menampilkan data dari parameter kata ke profile
      }
}
