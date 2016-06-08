<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Input;
Route::get('/', function () {
    Session::flush();
    return view('welcome');
  
});

Route::post('/admin', function () {
      $var='admin';
      session(['log' => $var]);
      return view('admin');
});
Route::auth();

Route::get('/con', function () {
    return view('con');
  
});

Route::get('/show', function () {
    $Feedback=new App\Site;
		$Feedback->S_NAME=Input::get('name');
		//$Feedback->S_ID=Input::get('sid');
		$Feedback->D_ID=Input::get('did');
		$Feedback->S_DESC=Input::get('de');

		$Feedback->S_TRANS=Input::get('tr');

		
		$Feedback->save();
                 $site= App\Site::all();
	       return view('show')->with('site',$site);
  
});

Route::get('/insert', function () {
    if(session()->has('log'))
    {           return view('insert');
   } 
   else{
     return view('auth.login');
  }
});

Route::get('/update', function () {
    if(session()->has('log'))
    {
	 $site= App\Site::all();
         return view('update')->with('site',$site); 
       //  return view('update');
   } 
   else{
     return view('auth.login');
  }
});
Route::get('/edit/{$id}', function () {
  //  if(session()->has('log'))
    //{
	
	$nm = DB::table('site')->where('S_ID', $id)->get();
	 //$site= App\Site::all();
         return view('show')->with('site',$nm); 
       //  return view('update')
   //} 
   //else{
     //return view('auth.login');
  //}
});
Route::get('/success', function () {
    $Feedback=new App\Feedback;
		$Feedback->USERNAME=Input::get('name');
		$Feedback->F_DESC=Input::get('comments');
		$name1=$Feedback->USERNAME;
		
		$Feedback->save();
		session(['name' => $name1]);
		//return view('/index');
		//return redirec('/index',['name'=>($Profile->Profile_name)]);
		//return 'hello';
    return view('succ');
  
});

Route::get('/coms', function () {
    $con=new App\Contact;
		$con->nam=Input::get('name');
		$con->email=Input::get('email');
	        $con->msg=Input::get('comments');
		$name1=$con->nam;
		
		$con->save();
		session(['name' => $name1]);
		//return view('/index');
		//return redirec('/index',['name'=>($Profile->Profile_name)]);
		//return 'hello';
    return view('succ');
  
});
Route::get('/district', function () {
	$district = App\District::all();
	return view('des')->with('district',$district);
         //return App\District::all();
});


Route::get('/log', function () {
        
	 return view('auth.login');
         //return App\District::all();
});

Route::get('/search', function () {
	$name =Input::get('search');
	//$nm = DB::table('district')->where('D_NAME', 'like',$name.'%')->get();
        $sm = DB::table('site')->where('S_NAME', 'like',$name.'%')->get();
	if($sm== null){
	   $nm = DB::table('district')->where('D_NAME', 'like',$name.'%')->get();
           return view('search')->with('s',$nm);
        }
        else{
      	    return view('search1')->with('s',$sm);
        } //return App\District::all();
});

Route::get('/log/in', function () {
        
	return view('p');
         //return App\District::all();
});

Route::get('/district/{name}', ['uses' =>'DesController@show']);
Route::get('/sites/{name}', ['uses' =>'DesController@show1']);


Route::get('/home', 'HomeController@index');
