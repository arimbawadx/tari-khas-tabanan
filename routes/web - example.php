<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\dashboardCSController;
use App\Http\Controllers\dataCustomersCSController;
use App\Http\Controllers\dataProgrammersCSController;
use App\Http\Controllers\dataCSCSController;
use App\Http\Controllers\progressReportsCSController;
use App\Http\Controllers\dashboardCustomerController;
use App\Http\Controllers\projectCustomersController;
use App\Http\Controllers\ItemCustomersController;
use App\Http\Controllers\dashboardProgrammerController;
use App\Http\Controllers\projectProgrammerController;
use App\Http\Controllers\ItemProgrammersController;
use App\Http\Controllers\progressReportsProgrammersController;
use App\Http\Controllers\progressReportsCustomersController;


// ==========================================================Authentication============================================================
Route::get('/', function(){
	return view('login');
});
Route::get('/login', function(){
	return view('login');
});
Route::post('login-check', [authController::class, 'loginCheck']);
Route::get('/logout', [authController::class, 'logout']);
// ===========================================================End Authentication=========================================================




// ==============================================================Customer Service=========================================================
// ------------------------------------------------------------------Dashboard-----------------------------------------------------------------
Route::get('/customer-services', [dashboardCSController::class, 'index'])->middleware('SessionCustomerServices');
// ------------------------------------------------------------------end Dashboard-------------------------------------------------------------

// ------------------------------------------------------------------Data Customer-----------------------------------------------------------------
Route::get('/customer-services/data-customers', [dataCustomersCSController::class, 'index'])->middleware('SessionCustomerServices');
Route::post('/customer-services/data-customer', [dataCustomersCSController::class, 'store'])->middleware('SessionCustomerServices');
Route::post('/customer-services/data-customer/{id}', [dataCustomersCSController::class, 'update'])->middleware('SessionCustomerServices');
Route::get('/customer-services/data-customer/{id}', [dataCustomersCSController::class, 'destroy'])->middleware('SessionCustomerServices');
// ------------------------------------------------------------------End Data Customer-------------------------------------------------------------

// ------------------------------------------------------------------Data Programmer-----------------------------------------------------------------
Route::get('/customer-services/data-programmers', [dataProgrammersCSController::class, 'index'])->middleware('SessionCustomerServices');
Route::post('/customer-services/data-programmer', [dataProgrammersCSController::class, 'store'])->middleware('SessionCustomerServices');
Route::post('/customer-services/data-programmer/{id}', [dataProgrammersCSController::class, 'update'])->middleware('SessionCustomerServices');
Route::get('/customer-services/data-programmer/{id}', [dataProgrammersCSController::class, 'destroy'])->middleware('SessionCustomerServices');
Route::get('/customer-services/data-programmer/{id}/projects', [dataProgrammersCSController::class, 'projects'])->middleware('SessionCustomerServices');
Route::post('/customer-services/project/{id}/ubah-programmer', [dataProgrammersCSController::class, 'ubahTanggungJawab'])->middleware('SessionCustomerServices');
// ------------------------------------------------------------------End Data Programmer-------------------------------------------------------------

// ------------------------------------------------------------------Data CS-----------------------------------------------------------------
Route::get('/customer-services/data-cs', [dataCSCSController::class, 'index'])->middleware('SessionCustomerServices');
Route::post('/customer-services/datacs', [dataCSCSController::class, 'store'])->middleware('SessionCustomerServices');
Route::post('/customer-services/datacs/{id}', [dataCSCSController::class, 'update'])->middleware('SessionCustomerServices');
Route::get('/customer-services/datacs/{id}', [dataCSCSController::class, 'destroy'])->middleware('SessionCustomerServices');

// Route::get('/customer-services/data-cs', [dataCSCSController::class, 'index']);
// Route::post('/customer-services/datacs', [dataCSCSController::class, 'store']);
// Route::post('/customer-services/datacs/{id}', [dataCSCSController::class, 'update']);
// Route::get('/customer-services/datacs/{id}', [dataCSCSController::class, 'destroy']);
// ------------------------------------------------------------------End Data CS-------------------------------------------------------------

// ------------------------------------------------------------------Progress Report-----------------------------------------------------------------
Route::get('/customer-services/reports/progress-reports', [progressReportsCSController::class, 'index'])->middleware('SessionCustomerServices');
Route::get('/customer-services/reports/progress-report/{id}', [progressReportsCSController::class, 'detail'])->middleware('SessionCustomerServices');
// ------------------------------------------------------------------End Progress Report-------------------------------------------------------------
// ===================================================================end Customer Services=========================================================



// ===================================================================Customer======================================================================
// ------------------------------------------------------------------Dashboard-----------------------------------------------------------------
Route::get('/customers', [dashboardCustomerController::class, 'index'])->middleware('SessionCustomers');
// ------------------------------------------------------------------end Dashboard-------------------------------------------------------------

// ------------------------------------------------------------------Project-------------------------------------------------------------
Route::get('/customers/projects', [projectCustomersController::class, 'index'])->middleware('SessionCustomers');
Route::get('/customers/project/detail/{id}', [projectCustomersController::class, 'show'])->middleware('SessionCustomers');
Route::get('/customers/project/add-projects', [projectCustomersController::class, 'create'])->middleware('SessionCustomers');
Route::post('/customers/project/update/{id}', [projectCustomersController::class, 'update'])->middleware('SessionCustomers');
Route::post('/customers/project/add-projects', [projectCustomersController::class, 'store'])->middleware('SessionCustomers');
Route::get('/customers/project/del/{id}', [projectCustomersController::class, 'destroy'])->middleware('SessionCustomers');
// ------------------------------------------------------------------end Project-------------------------------------------------------------

// ------------------------------------------------------------------Items-------------------------------------------------------------
Route::post('/customers/project/add-items', [ItemCustomersController::class, 'store'])->middleware('SessionCustomers');
Route::post('/customers/project/item/{id}', [ItemCustomersController::class, 'update'])->middleware('SessionCustomers');
Route::get('/customers/project/item/{id_project}/{id_item}', [ItemCustomersController::class, 'delete'])->middleware('SessionCustomers');
// ------------------------------------------------------------------end Items-------------------------------------------------------------

// ---------------------------------------------------------------Progress Report-------------------------------------------------------------
Route::get('/customers/reports/progress-reports', [progressReportsCustomersController::class, 'index'])->middleware('SessionCustomers');
Route::get('/customers/reports/progress-report/detail/{report_code}', [progressReportsCustomersController::class, 'show'])->middleware('SessionCustomers');
// ------------------------------------------------------------- EndProgress Report -------------------------------------------------------------
// ====================================================================end Customer==================================================================




// ==================================================================Programmer===================================================================
// ------------------------------------------------------------------Dashboard-----------------------------------------------------------------
Route::get('/programmers', [dashboardProgrammerController::class, 'index'])->middleware('SessionProgrammers');
// ------------------------------------------------------------------end Dashboard-------------------------------------------------------------

// ------------------------------------------------------------------Project-------------------------------------------------------------
Route::get('/programmers/projects/project-waiting', [projectProgrammerController::class, 'projectWaiting'])->middleware('SessionProgrammers');
Route::get('/programmers/projects/project-on-progress', [projectProgrammerController::class, 'projectOnProgress'])->middleware('SessionProgrammers');
Route::get('/programmers/projects/project-finished', [projectProgrammerController::class, 'projectFinished'])->middleware('SessionProgrammers');
Route::get('/programmers/project/detail/{id}', [projectProgrammerController::class, 'show'])->middleware('SessionProgrammers');
Route::get('/programmers/project/detail/take/{id}', [projectProgrammerController::class, 'takeProject'])->middleware('SessionProgrammers');
Route::post('/programmers/project/detail/add-link-project/{id}', [projectProgrammerController::class, 'addLinkProject'])->middleware('SessionProgrammers');
Route::get('/programmers/project/detail/delete-link-project/{id}', [projectProgrammerController::class, 'deleteLinkProject'])->middleware('SessionProgrammers');
// ------------------------------------------------------------------end Project-------------------------------------------------------------

// ------------------------------------------------------------------Items-------------------------------------------------------------
Route::post('/programmers/project/item/{id}', [ItemProgrammersController::class, 'update'])->middleware('SessionProgrammers');
// ------------------------------------------------------------------end Items-------------------------------------------------------------

// ---------------------------------------------------------------Progress Report-------------------------------------------------------------
Route::get('/programmers/project/detail/generate/{id}', [progressReportsProgrammersController::class, 'store'])->middleware('SessionProgrammers');
Route::get('/programmers/reports/progress-reports', [progressReportsProgrammersController::class, 'index'])->middleware('SessionProgrammers');
Route::get('/programmers/reports/progress-report/detail/{report_code}', [progressReportsProgrammersController::class, 'show'])->middleware('SessionProgrammers');
// ------------------------------------------------------------- EndProgress Report -------------------------------------------------------------
// ===============================================================end Programmer=================================================================
