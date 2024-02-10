<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProgramManagerController;
use App\Http\Controllers\HdController;
use App\Http\Controllers\SupplierController;
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


Route::controller(PageController::class)->group(function () {
    Route::get('/', 'AdminLogin')->name('login');
    // Route::get('/Admin/Login', 'AdminLogin');
    // Route::get('/District/Login', 'districtPage');
    // Route::get('/Program_Manager/Login', 'pmPage');
    // Route::get('/Health_Department/Login', 'hdPage');
    // Route::get('/Health_Center/Login', 'hcPage');
    Route::get('/Program_Manager/Dashboard', 'pmDashboard')->middleware('auth');
    Route::get('/Admin/Dashboard', 'adminDashboard')->middleware('auth');
    Route::get('/Health_Department/Dashboard', 'hdDashboard')->middleware('auth');
    Route::get('/District/Dashboard', 'dtDashboard')->middleware('auth');
    Route::get('/Health_Center/Dashboard', 'hcDashboard')->middleware('auth');
    Route::get('/Supplier/Dashboard', 'supplierDashboard')->middleware('auth');
});

Route::controller(UserController::class)->group(function () {
    // Route::get('/Admin/User_List', 'userlistPage');
    Route::post('/Admin/Store', 'store');
    Route::get('/Admin/Add_User', 'createUserPage')->middleware('auth');
    Route::get('/Admin/User_List', 'userList')->middleware('auth');
    Route::get('/Admin/User_List/$id',);
    Route::post('/Admin/Login/Process', 'LoginProcess');
    Route::post('/Logout', 'logout');
    Route::get('/change-password', 'changePassword')->name('changePassword');
    Route::post('/change-password', 'ChangePasswordSave')->name('changePass');
});


// Admin route

Route::controller(AdminController::class)->group(function () {
    Route::get('/Admin/District_List', 'districtListpage')->middleware('auth');
    Route::get('/Admin/Account_Profile', 'profile')->middleware('auth');
    Route::get('/Admin/Account_Change_Password', 'profileChange')->middleware('auth');
});


// Health Department Route
Route::controller(HdController::class)->group(function () {
    Route::get('/Health_Department/Item_List', 'hdInventory')->middleware('auth');
    Route::get('/Health_Department/Allocation_List', 'hdAllocation')->middleware('auth');
    Route::get('/Health_Department/Profile', 'hdAccount')->middleware('auth');
    Route::get('/Health_Department/Profile_Change', 'hdAccountChange')->middleware('auth');
});

// Route for Disctrict

Route::middleware(['auth','district'])->group(function(){

    Route::get('/District/Dashboard', [PageController::class,'dtDashboard']);
    Route::controller(DistrictController::class)->group(function (){
        
    
        Route::get('/District/Account_Profile', 'profileDistrict')->middleware('auth');
        Route::get('/District/Account_Change_Password', 'profileChangeDistrict')->middleware('auth');
        Route::get('/District/Inventory', 'inventoryDistrict');
        Route::get('/District/Allocation_List', 'allocationlistDistrict');
        Route::get('/District/Allocation_Create', 'allocationcreateDistrict');
        Route::get('/District/Allocation_View', 'districtView');
    
    });
});

// Supplier Route
Route::controller(SupplierController::class)->group(function () {
    Route::get('/Supplier/Item_List', 'itemList')->middleware('auth');
    Route::get('/Supplier/Account_Profile', 'profileSupplier')->middleware('auth');
    Route::get('/Supplier/Account_Change_Password', 'profileChangeSupplier')->middleware('auth');
});

// Program Manager route
Route::controller(ProgramManagerController::class)->group(function () {
    Route::get('/Program_Manager/Inventorylist', 'Inventorypage')->middleware('auth');
    Route::get('/Program_Manager/Allocationlist', 'Allocationpage')->middleware('auth');
    Route::get('/Program_Manager/PPMPlist', 'PPMPpage')->middleware('auth');
    Route::get('/Program_Manager/Profile', 'Profilepage')->middleware('auth');

});

