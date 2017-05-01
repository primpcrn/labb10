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

  $train_tables  = DB::table('train_tables')->get();
  // $traintable = DB::table('traintable')->where('city', 'Hat Yai')->first();

  // return $traintable;
   return view('welcome',compact('train_tables'));
});

Route::get('about', function() {
    return view('about');
});
