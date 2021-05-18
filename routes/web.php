<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/input', function () {
    return view('input');
});

Route::post('/search',function (Illuminate\Http\Request $request){
    $input = $request->input;
    $array = ['dog'=> 'con cho', 'cat'=>'con meo', 'chicken'=>'con ga'];
    if(array_key_exists($input,$array)) {
        return view('search') ->with('search', $array[$input]);
    }
    else{
        return view('search');
    }
});
