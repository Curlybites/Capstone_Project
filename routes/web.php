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
use App\Models\District;

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
Route::get('/', [PageController::class, 'AdminLogin'])->name('login');

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

    Route::get('/Admin/Dashboard', [PageController::class, 'adminDashboard']);

    Route::post('/Admin/Store', [UserController::class, 'store']);
    Route::get('/Admin/Add_User', [UserController::class, 'createUserPage']);
    Route::get('/Admin/User_List', [UserController::class, 'userList']);
    Route::get('/Admin/User_List/$id', [UserController::class, '']);

    // Route::post('/Logout', [UserController::class,'logout']);
    // Route::get('/change-password', [UserController::class,'changePassword']);
    // Route::get('/change-password', [UserController::class,'changePass']);

    Route::controller(AdminController::class)->group(function () {
        Route::get('/Admin/District_List', 'districtListpage');
        Route::post('/Admin/District_Store', 'districtStore');
        Route::put('/Admin/District_List/{id}', 'updateDistrict');

        Route::get('/Admin/Account_Profile', 'profile');
        Route::get('/Admin/Account_Change_Password', 'profileChange');

        Route::get('/Admin/Barangay_List', 'barangayPage');
        Route::post('/Admin/Barangay_Store', 'barangayStore');
        Route::put('/Admin/Barangay_List/{id}', 'updateBarangay');

        Route::get('/Admin/Health_Center_List', 'Healthcenterpage');
        Route::post('/Admin/Health_Center_Store', 'healthcenterStore');
        Route::put('/Admin/Health_Center_List/{id}', 'updatehc');

        Route::get('/Admin/Program_List', 'Programpage');
        Route::post('/Admin/Program_Store', 'programStore');
        Route::put('/Admin/Program_List/{id}', 'programUpdate');

        Route::get('/Admin/Role_List', 'rolePage');
        Route::post('/Admin/Role_Store', 'roleStore');
        Route::put('/Admin/Role_List/{id}', 'roleUpdate');
    });
});


// Route For Program Manager
Route::middleware(['auth', 'program_manager'])->group(function () {

    Route::get('/Program_Manager/Dashboard', [PageController::class, 'pmDashboard']);

    Route::get('/Program_Manager/Inventorylist', [ProgramManagerController::class, 'Inventorypage']);
    Route::get('/Program_Manager/Allocationlist', [ProgramManagerController::class, 'Allocationpage']);
    Route::get('/Program_Manager/PPMPlist', [ProgramManagerController::class, 'PPMPpage']);
    Route::get('/Program_Manager/Profile', [ProgramManagerController::class, 'Profilepage']);

    Route::controller(ProgramManagerController::class)->group(function () {
        // PPMP_Page
        Route::get('/Program_Manager/PPMPlist', 'PPMPpage');
        Route::get('/Program_Manager/pmPPMPcreate', 'PPMPcreate');
        Route::get('/Program_Manager/pmPPMPView{id}', 'PPMPView');
        Route::get('/Program_Manager/pmPPMPEdit_{id}', 'PPMPEdit');
        Route::put('/Program_Manager/pmPPMPEdit_{id}', 'editPPMP')->name('routes.ppmpupdate');
        Route::post('/Program_Manager/PPMPlist', 'storePPMP')->name('ppmp.create');
        Route::delete('/Program_Manager/PPMPlist{id}', 'deletePPMP')->name('ppmp.delete');
        Route::get('/Program_Manager/Allocationlist', 'Allocationpage');
        Route::get('/Program_Manager/AllocationView', 'pmAllocationView');
        Route::get('/Program_Manager/AllocationEdit', 'pmAllocationEdit');
        Route::get('/Program_Manager/pmAllocationPrint', 'AllocationPrint');
        Route::get('/Program_Manager/AllocationProcess', 'pmAccountChange');
        Route::get('/Program_Manager/Receive_List','receive_page');
        Route::get('/Program_Manager/Receive_View{id}','receive_view');
        Route::post('/Program_Manager/Receive_View{id}','program_receive_items')->name('pm_received_items');
        // Report_Page
        Route::get('/Program_Manager/Inventory_List', 'Inventorypage');
        Route::get('/Program_Manager/Create_Allocation', 'create_allocation');
        // Profile_Page
        Route::get('/Program_Manager/Profile', 'Profilepage');
        Route::get('/Program_Manager/Profile_Change', 'pmAccountChange');
    });
});


// Route For Health Department
Route::middleware(['auth', 'health_department'])->group(function () {

    Route::get('/Health_Department/Dashboard', [PageController::class, 'hdDashboard']);

    Route::get('/Health_Department/Item_List', [HdController::class, 'hdInventory']);
    Route::get('/Health_Department/Allocation_List', [HdController::class, 'hdAllocation']);
    Route::get('/Health_Department/Allocation_Process', [HdController::class, 'hdAllocationProcess']);
    Route::get('/Health_Department/Allocation_View_{id}', [HdController::class, 'hdAllocationView']);
    Route::get('/Health_Department/Allocation_Edit_{id}', [HdController::class, 'hdAllocationEdit']);
    Route::get('/Health_Department/Profile', [HdController::class, 'hdAccount']);
    Route::get('/Health_Department/Purchase_Order_View{id}', [HdController::class, 'hdPurchaseOrderView']);
    Route::get('/Health_Department/Purchase_Order_List', [HdController::class, 'hdPurchaseOrderList']);
    Route::get('/Health_Department/Profile_Change', [HdController::class, 'hdAccountChange']);
    Route::post('/Health_Department/Allocation_Process', [HdController::class, 'hdAllocationtoProg'])->name('allocate');

    Route::put('/Health_Department/Allocation_Edit_{id}', [HdController::class, 'hdAllocationProgUpdate'])->name('updateallocation');
    Route::delete('/Health_Department/Allocation_List{id}', [HdController::class, 'hdAllocationProgDelete'])->name('deleteallocation');

    Route::post('/Health_Department/Allocation_List{id}', [HdController::class, 'hdReceive'])->name('receivehd');
});



// Route For Disctrict 
Route::middleware(['auth', 'district'])->group(function () {

    Route::get('/District/Dashboard', [PageController::class, 'dtDashboard']);

    Route::get('/District/District_Receive', [DistrictController::class, 'receive']);
    Route::get('/District/District_InventoryList', [DistrictController::class, 'dtInventory_List']);
    Route::get('/District/District_Allocation', [DistrictController::class, 'allocation']);
    Route::get('/District/District_Report', [DistrictController::class, 'Report']);
    Route::get('/District/District_Account', [DistrictController::class, 'Account']);
    Route::get('/District/District_Change_Account', [DistrictController::class, 'AccountChange']);
});

// Route For Health Center
Route::middleware(['auth', 'health_center'])->group(function () {
    Route::get('/Health_Center/Dashboard', [PageController::class, 'hcDashboard']);

    Route::controller(HcController::class)->group(function () {

        // FOR ROUTING OF TABS
        Route::get('/Health_Center/Item_List', 'hcInventory');
        Route::get('/Health_Center/Patient_List', 'hcPatient');
        Route::get('/Health_Center/Patient_Item_List', 'hcItemList');
        // Route::get('/Health_Center/Patient_List/view', 'hcPatientView')->middleware('auth');
        Route::get('/Health_Center/Patient_View{id}', 'hcPatientView');
        Route::get('/Health_Center/Patient_View', 'listPatientPrint');

        // FOR CREATION OF PATIENT
        Route::post('/Health_Center/Patient_List', 'storePatient')->name('patientname');

        // FOR PATIENT LIST TABLE
        Route::get('/Health_Center/Patient_List', 'listPatient');

        //FOR SEND ITEMS
        Route::get('/Health_Center/Send_Items', 'sendItemsActiveList');

        // FOR SENDING ITEM TO PATIENT
        Route::get('/Health_Center/Patient_Sent_Item{id}', 'itemSendPatientInfo');
        Route::post('/Health_Center/Patient_Sent_Item', 'HcSendItemsInput');

        // Route::get('/Health_Center/Patient_Sent_Item', 'index');

        // FOR ACCOUNT
        Route::get('/Health_Center/Profile', 'hcAccount');
        Route::get('/Health_Center/Profile_Change', 'hcAccountChange');

        // Route::get('/Health_Center/Patient_View', 'listPatientnMedicine');
        // Route::put('/Health_Center/Patient_List/{id}', 'updatePatient')->name('updatePatient')->middleware('auth');

        // FOR UPDATING PATIENT INFO
        Route::post('/Health_Center/Patient_List/{id}', 'updatePatient')->name('routes.update');

        // FOR INVENTORY
        Route::get('/Health_Center/Item_List', 'hcInventoryList');
    });
});


// Route For Supplier
Route::middleware(['auth', 'supplier'])->group(function () {
    Route::get('/Supplier/Dashboard', [PageController::class, 'supplierDashboard']);

    Route::post('/Supplier/Item_List', [SupplierController::class, 'storeItem'])->name('products.store');
    Route::put('/Supplier/Item_List/{id}', [SupplierController::class, 'updateItem'])->name('products.update');
    Route::delete('/Supplier/Item_List/{id}', [SupplierController::class, 'deleteitem'])->name('products.delete');
    Route::get('/Supplier/Item_List', [SupplierController::class, 'itemList']);
    Route::get('/Supplier/Account_Profile', [SupplierController::class, 'profileSupplier']);
    Route::get('/Supplier/Account_Change_Password', [SupplierController::class, 'profileChangeSupplier']);
    Route::get('/Supplier/PPMP_List', [SupplierController::class, 'ppmp']);
    Route::get('/Supplier/PPMP_View{id}', [SupplierController::class, 'ppmp_view']);
    Route::get('/Supplier/PPMP_Edit{id}', [SupplierController::class, 'ppmp_edit']);
    Route::put('/Supplier/PPMP_Edit{id}', [SupplierController::class, 'ppmp_update'])->name('supplier_ppmp.update');
    Route::delete('/Supplier/PPMP_List{id}', [SupplierController::class, 'deletePPMP'])->name('supplier_ppmp.delete');
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
