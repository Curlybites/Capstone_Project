<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


// Auth::routes();
// admin Route
// Route::middleware(['auth','user-role:user'])->group(function(){
//     Route::get("/Admin/Dashboard",[PageController::class,'adminDashboard'])->name('AdminHome');
// });


// // Program Manager Route
// Route::middleware(['auth','user-role:user'])->group(function(){
//     // Route::get("/Admin/Dashboard",[PageController::class,'adminDashboard'])->name('AdminHome');
// });


// // Health Department Route
// Route::middleware(['auth','user-role:user'])->group(function(){
//     // Route::get("/Admin/Dashboard",[PageController::class,'adminDashboard'])->name('AdminHome');
// });


// // District  Route
// Route::middleware(['auth','user-role:user'])->group(function(){
//     // Route::get("/Admin/Dashboard",[PageController::class,'adminDashboard'])->name('AdminHome');
// });

// // Health Center Route
// Route::middleware(['auth','user-role:user'])->group(function(){
//     // Route::get("/Admin/Dashboard",[PageController::class,'adminDashboard'])->name('AdminHome');
// });



Route::controller(PageController::class)->group(function(){
    Route::get('/','loginPage');
    Route::get('/Admin/Login','AdminLogin');
    Route::get('/District/Login','districtPage');
    Route::get('/Program_Manager/Login','pmPage');
    Route::get('/Health_Department/Login','hdPage');
    Route::get('/Health_Center/Login','hcPage');
    Route::get('/Project_Manager/Dashboard','pmDashboard');
    Route::get('/Admin/Dashboard','adminDashboard');
   
});

Route::controller(UserController::class)->group(function(){
    Route::get('/Admin/User_List','userlistPage');
    Route::post('/Admin/Store','store');
    Route::get('/Admin/Add_User','createUserPage');
    Route::get('/Admin/User_List','userList');
    Route::post('/Admin/Login/Process','LoginProcess');
});