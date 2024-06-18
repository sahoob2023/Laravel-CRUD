<?php

use App\Http\Controllers\Customercontroller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
 
use App\Models\Customer;
 

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
Route::get('/form',[FormController::class,'index']);
Route::post('/form',[FormController::class,'register']);

// Route::get('/customer',function(){
//     $customers = Customer::all();
//     echo "<pre>";
//     print_r($customers->toArray());
// });

Route::get('/customer',[Customercontroller::class,'index'])->name('customer');
Route::get('/customer/delete/{id}/',[Customercontroller::class,'destroy'])->name('delete');
Route::get('/customer/edit/{id}/',[Customercontroller::class,'edit'])->name('edit');
Route::post('/customer/update/{id}/',[Customercontroller::class,'update'])->name('update');
Route::get('/customer/view',[Customercontroller::class,'view'])->name('view');
Route::post('/customer',[Customercontroller::class,'store']);
