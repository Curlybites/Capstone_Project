<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::controller(PageController::class)->group(function(){
    Route::get('/','loginPage');
    Route::get('/Admin/Login','AdminLogin');
    Route::get('/District/Login','districtPage');
    Route::get('/Program_Manager/Login','pmPage');
    Route::get('/Health_Department/Login','hdPage');
    Route::get('/Health_Center/Login','hcPage');
    Route::get('/Admin/Dashboard','adminDashboard');

    Route::get('/Project_Manager/Dashboard','pmDashboard');
   
});

Route::controller(UserController::class)->group(function(){

    Route::get('/Admin/User_List','userlistPage');
    Route::post('/Admin/Store','store');
    Route::get('/Admin/Add_User','createUserPage');
    Route::get('/Admin/User_List','userList');

});