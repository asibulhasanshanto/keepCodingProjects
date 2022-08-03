<?php

use Illuminate\Support\Facades\Route;
//import shop model
use App\Models\Shop;
//import Classroom model
use App\Models\Classroom;

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

Route::get('/shop',function(){
    // //get many shops
    // $shops = Shop::where('numer_of_employees','>',5)->get();

    // //get one shop
    // $shop = Shop::find(10);

    // //create a  shop
    // $shop = Shop::create([
    //     'name'=>'Shop 10',
    //     'numer_of_employees'=>10,
    //     'address'=>'address 10',
    // ]);

    // //update a shop
    // $shop = Shop::find(101);
    // $shop->name = 'Shop 101';
    // $shop->save();

    // //delete a shop
    // // $shop = Shop::destroy(101);
    // $shop = Shop::find(100);
    // if($shop){
    //     $shop->delete();
    // }

    // return $shop;
});

Route::get('/classrooms_student',function(){
    $classroom = Classroom::find(1);
    $students = $classroom->students;
    return $students;
});