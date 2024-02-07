<?php
 
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProgramManagerController;
use App\Http\Controllers\HdController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DistrictController;
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
 
 
// Route For Login
Route::get('/',[PageController::class,'AdminLogin'])->name('login');
 
//Route for User Controller
Route::controller(UserController::class)->group(function () {
    // Route::get('/Admin/User_List', 'userlistPage');
    // Route::post('/Admin/Store', 'store');
    // Route::get('/Admin/Add_User', 'createUserPage')->middleware('auth');
    // Route::get('/Admin/User_List', 'userList')->middleware('auth');
    // Route::get('/Admin/User_List/$id',)->middleware('auth');
    Route::post('/Login/Process', 'LoginProcess');
    Route::post('/Logout', 'logout');
    Route::get('/change-password', 'changePassword')->name('changePassword');
    Route::post('/change-password', 'ChangePasswordSave')->name('changePass');
});
 
 
 
// Route For Admin
Route::middleware(['auth', 'admin'])->group(function () {
 
    Route::get('/Admin/Dashboard', [PageController::class,'adminDashboard']);
 
    Route::post('/Admin/Store', [UserController::class,'store']);
    Route::get('/Admin/Add_User', [UserController::class,'createUserPage']);
    Route::get('/Admin/User_List', [UserController::class,'userList']);
    Route::get('/Admin/User_List/$id', [UserController::class,'']);
   
    // Route::post('/Logout', [UserController::class,'logout']);
    // Route::get('/change-password', [UserController::class,'changePassword']);
    // Route::get('/change-password', [UserController::class,'changePass']);
 
        Route::controller(AdminController::class)->group(function () {
        Route::post('/Admin/District_Store', 'districtStore');
        Route::post('/Admin/Barangay_Store', 'barangayStore');
        Route::post('/Admin/Health_Center_Store', 'healthcenterStore');
        Route::post('/Admin/Program_Store', 'programStore');
        Route::get('/Admin/District_List', 'districtListpage');
        Route::put('/Admin/District_List/{id}', 'updateDistrict');
        Route::get('/Admin/Account_Profile', 'profile');
        Route::get('/Admin/Account_Change_Password', 'profileChange');
        Route::get('/Admin/Barangay_List', 'barangayPage');
        Route::get('/Admin/Health_Center_List', 'Healthcenterpage');
        Route::put('/Admin/Health_Center_List/{id}','updatehc');
        Route::get('/Admin/Program_List', 'Programpage');
        Route::put('Admin/Program_List/{id}', 'programUpdate');
    });
 
 
});
 
 
// Route For Program Manager
Route::middleware(['auth', 'program_manager'])->group(function () {
 
    Route::get('/Program_Manager/Dashboard', [PageController::class,'pmDashboard']);
 
    Route::get('/Program_Manager/Inventorylist', [ProgramManagerController::class,'Inventorypage']);
    Route::get('/Program_Manager/Allocationlist', [ProgramManagerController::class,'Allocationpage']);
    Route::get('/Program_Manager/PPMPlist', [ProgramManagerController::class,'PPMPpage']);
    Route::get('/Program_Manager/Profile', [ProgramManagerController::class,'Profilepage']);
 
});