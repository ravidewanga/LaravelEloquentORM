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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/user',function(){
    //\App\Models\User::factory()->count(3)->create(); 

    // \App\Models\Address::create([
    //     'user_id'=>1,
    //     'country'=>'india'
    // ]);

    // \App\Models\Address::create([
    //     'user_id'=>2,
    //     'country'=>'USA'
    // ]);

    // \App\Models\Address::create([
    //     'user_id'=>3,
    //     'country'=>'UK'
    // ]);

    // $user = \App\Models\User::factory()->create(); 
    // $user->address()->create([
    //     'country'=>'India'
    // ]);

    //$users = \App\Models\User::all();
    $users = \App\Models\User::with('address')->get(); //--optimized query with ORM
    
    //$addresses = \App\Models\Address::all();
    $addresses = \App\Models\Address::with('user')->get(); //optimized query with ORM

    return view('users.index',compact('addresses','users'));
});