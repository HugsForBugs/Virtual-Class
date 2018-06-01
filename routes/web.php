<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
//
///$network= new App\networks ;
 //$network->id='1';
 //$network->name='soukaina';
// $network->save();
//
//$network = App\networks::find(1);
//return $network->name;


    //Schema::create('programmers', function($table) {
      //  $table->increments('id');
        //$table->string('name');
     //   $table->string('email')->unique();
       // $table->string('password');
        
    //}); 



  //  Schema::table('programmers', function($table) {
    //   $table->dropColumn('id');
   // }); 

       
    return view('welcome');
});

Route::get('les_cours', function () {
    return view('les_cours');
});
Route::get('instructor', function () {
    return view('instructor');
});

Route::get('register', function () {
    return view('register');
});
Route::get('sign-in', function () {
    return view('sign-in');
});
Route::get('sign-out', function () {
    return view('sign-out');
});
Route::post('instructor', function () {
    $user=new app\User;
    $user->name = input::get('name');
    $user->email = input::get('email');
    $user->password = hash::make(input::get('password'));
    $user->save();


    return view('thanks');
});
Route::post('thanks', function () {
   
   
    $yourEmail = Input::get('email');
     return view('thanks')->with( 'yourEmail',$yourEmail );
 });
 
Route::get('hello', function () {
    return "hello soukaina";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
