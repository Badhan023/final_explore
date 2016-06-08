<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class DesController extends Controller
{
    //
    public function show($name)
    {
  	//$dec = App\District::find($name);
	//return view('desc')->with('district',$district);
        $nm = DB::table('district')->where('D_ID', $name)->first();
        $sm = DB::table('site')->where('D_ID', $name)->get();
        $hm = DB::table('hotel')->where('D_ID', $name)->get();
        
	      return view('desc', ['users' => $nm, 'sites'=>$sm,'hotl'=>$hm]);
	
    }
    public function show1($name)
    {
  	//$dec = App\District::find($name);
	//return view('desc')->with('district',$district);
       // $nm = DB::table('district')->where('D_ID', $name)->first();
        $sm = DB::table('site')->where('S_NAME', $name)->first();
        return view('site', ['s'=>$sm]);
    }


}
