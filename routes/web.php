<?php
 
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HcController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProgramManagerController;
use App\Http\Controllers\HdController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DistrictController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PatientController;


 
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
    Route::get('/Admin/User_List', 'userlistPage');
    Route::post('/Admin/Store', 'store');
    Route::get('/Admin/Add_User', 'createUserPage')->middleware('auth');
    Route::get('/Admin/User_List', 'userList')->middleware('auth');
    Route::get('/Admin/User_List/$id',)->middleware('auth');
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
    Route::get('/Admin/District_List', 'districtListpage')->middleware('auth');
    Route::get('/Admin/Account_Profile', 'profile')->middleware('auth');
    Route::get('/Admin/Account_Change_Password', 'profileChange')->middleware('auth');
});


// Route For Supplier
Route::middleware(['auth', 'supplier'])->group(function () {
    Route::get('/Supplier/Dashboard', [PageController::class,'supplierDashboard']);


    Route::post('/Supplier/Item_List',[SupplierController::class,'storeItem'])->name('products.store');
    Route::put('/Supplier/Item_List/{id}',[SupplierController::class,'updateItem'])->name('products.update');
    Route::delete('/Supplier/Item_List/{id}',[SupplierController::class,'deleteitem'])->name('products.delete');
    Route::get('/Supplier/Item_List', [SupplierController::class,'itemList']);
    Route::get('/Supplier/Account_Profile', [SupplierController::class,'profileSupplier']);
    Route::get('/Supplier/Account_Change_Password', [SupplierController::class,'profileChangeSupplier']);
    Route::get('/Supplier/PPMP_List', [SupplierController::class,'ppmp']);
    
});



// Route::controller(PageController::class)->group(function () {
//     Route::get('/', 'AdminLogin')->name('login'); 
// });




// Route::controller(UserController::class)->group(function () {
//     // Route::get('/Admin/User_List', 'userlistPage');
//     // Route::post('/Admin/Store', 'store');
//     // Route::get('/Admin/Add_User', 'createUserPage')->middleware('auth');
//     // Route::get('/Admin/User_List', 'userList')->middleware('auth');
//     // Route::get('/Admin/User_List/$id',)->middleware('auth');
//     Route::post('/Login/Process', 'LoginProcess');
//     Route::post('/Logout', 'logout');
//     Route::get('/change-password', 'changePassword')->name('changePassword');
//     Route::post('/change-password', 'ChangePasswordSave')->name('changePass');
// });






// Supplier Route
Route::controller(SupplierController::class)->group(function () {
    Route::get('/Supplier/Item_List', 'itemList')->middleware('auth');
    Route::get('/Supplier/Account_Profile', 'profileSupplier')->middleware('auth');
    Route::get('/Supplier/Account_Change_Password', 'profileChangeSupplier')->middleware('auth');
    Route::get('/Supplier/PPMP_List','ppmp')->middleware('auth');
});

// Program Manager route
// Route::controller(ProgramManagerController::class)->group(function () {
//     Route::get('/Program_Manager/Inventorylist', 'Inventorypage')->middleware('auth');
//     Route::get('/Program_Manager/Allocationlist', 'Allocationpage')->middleware('auth');
//     Route::get('/Program_Manager/PPMPlist', 'PPMPpage')->middleware('auth');
//     Route::get('/Program_Manager/Profile', 'Profilepage')->middleware('auth');


Route::controller(HcController::class)->group(function () {

    // FOR ROUTING OF TABS
    Route::get('/Health_Center/Item_List', 'hcInventory')->middleware('auth');
    Route::get('/Health_Center/Patient_List', 'hcPatient')->middleware('auth');
    Route::get('/Health_Center/Patient_Item_List', 'hcItemList')->middleware('auth');
    // Route::get('/Health_Center/Patient_List/view', 'hcPatientView')->middleware('auth');
    Route::get('/Health_Center/Patient_View{id}', 'hcPatientView')->middleware('auth');
    Route::get('/Health_Center/Patient_View', 'listPatientPrint')->middleware('auth');
    Route::get('/Health_Center/Report', 'hcReport')->middleware('auth');

    // FOR CREATION OF PATIENT
    Route::post('/Health_Center/Patient_List', 'storePatient')->name('patientname')->middleware('auth');

    // FOR PATIENT LIST TABLE
    Route::get('/Health_Center/Patient_List', 'listPatient');

    //FOR SEND ITEMS
    Route::get('/Health_Center/Send_Items', 'sendItems');

    // FOR SENDING ITEM TO PATIENT
    Route::get('/Health_Center/Patient_Sent_Item{id}', 'itemSentPatient')->middleware('auth');
    Route::post('/Health_Center/Patient_Sent_Item', 'distribute')->name('distribute')->middleware('auth');

    // Route::get('/Health_Center/Patient_Sent_Item', 'index');

    // FOR ACCOUNT
    Route::get('/Health_Center/Profile', 'hcAccount')->middleware('auth');
    Route::get('/Health_Center/Profile_Change', 'hcAccountChange')->middleware('auth');

    // Route::get('/Health_Center/Patient_View', 'listPatientnMedicine');
    // Route::put('/Health_Center/Patient_List/{id}', 'updatePatient')->name('updatePatient')->middleware('auth');

    // FOR UPDATING PATIENT INFO
    Route::post('/Health_Center/Patient_List/{id}', 'updatePatient')->name('routes.update')->middleware('auth');

    // FOR INVENTORY
    Route::get('/Health_Center/Item_List', 'listItem');

});

// District route
Route::controller(DistrictController::class)->group(function (){
    Route::get('/District/Account_Profile', 'profileDistrict')->middleware('auth');
    Route::get('/District/Account_Change_Password', 'profileChangeDistrict')->middleware('auth');
    Route::get('/District/Inventory', 'inventoryDistrict');
    Route::get('/District/Allocation_List', 'allocationlistDistrict');
    Route::get('/District/Allocation_Create', 'allocationcreateDistrict');
    Route::get('/District/Allocation_View', 'districtView');

});
// // Admin route

// Route::controller(AdminController::class)->group(function () {
//     Route::post('/Admin/District_Store', 'districtStore');
//     Route::post('/Admin/Barangay_Store', 'barangayStore');
//     Route::post('/Admin/Health_Center_Store', 'healthcenterStore');
//     Route::post('/Admin/Program_Store', 'programStore');
//     Route::get('/Admin/District_List', 'districtListpage')->middleware('auth');
//     Route::put('/Admin/District_List/{id}', 'updateDistrict');
//     Route::get('/Admin/Account_Profile', 'profile')->middleware('auth');
//     Route::get('/Admin/Account_Change_Password', 'profileChange')->middleware('auth');
//     Route::get('/Admin/Barangay_List', 'barangayPage');
//     Route::get('/Admin/Health_Center_List', 'Healthcenterpage');
//     Route::put('/Admin/Health_Center_List/{id}','updatehc');
//     Route::post('/Admin/Program_List', 'Programpage');
//     Route::put('Admin/Program_List/{id}', 'programUpdate');
// });


// // Program Manager route
// Route::controller(ProgramManagerController::class)->group(function () {
//     // Route::get('/Program_Manager/Inventorylist', 'Inventorypage')->middleware('auth');
//     Route::get('/Program_Manager/Allocationlist', 'Allocationpage')->middleware('auth');
//     Route::get('/Program_Manager/PPMPlist', 'PPMPpage')->middleware('auth');
//     Route::get('/Program_Manager/Profile', 'Profilepage')->middleware('auth');
// });

// // Health Department Route
// Route::controller(HdController::class)->group(function () {
//     // Route::get('/Health_Department/Item_List', 'hdInventory')->middleware('auth');
//     // Route::get('/Health_Department/Allocation_List', 'hdAllocation')->middleware('auth');
//     // Route::get('/Health_Department/Allocation_Process', 'hdAllocationProcess')->middleware('auth');
//     // Route::get('/Health_Department/Allocation_View', 'hdAllocationView')->middleware('auth');
//     // Route::get('/Health_Department/Allocation_Edit', 'hdAllocationEdit')->middleware('auth');
//     // Route::get('/Health_Department/Profile', 'hdAccount')->middleware('auth');
//     // Route::get('/Health_Department/Purchase_Order_View', 'hdPurchaseOrderView')->middleware('auth');
//     // Route::get('/Health_Department/Purchase_Order_List', 'hdPurchaseOrderList')->middleware('auth');
//     // Route::get('/Health_Department/Profile_Change', 'hdAccountChange')->middleware('auth');

//     // Route::post('/Health_Department/Allocation_Process', 'hdAllocationtoProg')->name('allocate')->middleware('auth');
// });

// // Supplier Route
// Route::controller(SupplierController::class)->group(function () {   
//     // Route::get('/Supplier/Item_List', 'itemList')->middleware('auth');
//     // Route::get('/Supplier/Account_Profile', 'profileSupplier')->middleware('auth');
//     // Route::get('/Supplier/Account_Change_Password', 'profileChangeSupplier')->middleware('auth');
//     // Route::get('/Supplier/PPMP_List', 'ppmp')->middleware('auth');
// });

