<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\FrontHomeController;
use App\Http\Controllers\FrontAboutController;
use App\Http\Controllers\ReveiwController;
use App\Http\Controllers\FatenController;


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
Route::namespace("Admin")->prefix('admin')->group(function(){  
  Route::namespace('Auth')->group(function(){
      Route::get('/login',[LoginController::class,'showLoginForm'])->name('admin.login');
      Route::post('/login',[LoginController::class,'login']);
      Route::post('/logout',[LoginController::class,'logout'])->name('admin.logout');
    });
  Route::middleware(['auth:admin'])->group(function () {
      Route::get('/home',[HomeController::class,'index'])->name('admin.home');

      // CategoryController
      Route::get('/categories',[CategoryController::class,'all_categories'])->name('admin.all_categories');
      Route::post('/addNewCategory',[CategoryController::class,'store_category'])->name('admin.addNewCategory');
      Route::get('/deleteCategory/{id}',[CategoryController::class,'delete_category'])->name('admin.deleteCategory');
      Route::post('/updateCategory/{id}',[CategoryController::class,'update_category'])->name('admin.updateCategory');

      //ServiceController 
      Route::get('/services',[ServiceController::class,'services'])->name('admin.services');
      Route::post('/services/store',[ServiceController::class,'store'])->name('admin.services.store');
      Route::post('/services/update/{id}',[ServiceController::class,'update'])->name('admin.services.update');
      Route::get('/services/delete/{id}',[ServiceController::class,'delete'])->name('admin.services.delete');

      //CarController {{route('admin.cars')}}
      Route::get('/cars',[CarController::class,'index'])->name('admin.cars');
      Route::post('/cars/store',[CarController::class,'store'])->name('admin.cars.store');
      Route::post('/cars/update/{id}',[CarController::class,'update'])->name('admin.cars.update');
      Route::get('/cars/destroy/{id}',[CarController::class,'destroy'])->name('admin.cars.destroy');
      
      //CarController {{route('admin.cars')}}
      Route::get('/products',[ProductController::class,'products'])->name('admin.products');
      Route::get('/products/delete/{id}',[ProductController::class,'delete'])->name('admin.delete');
      

      Route::get('/providersReq',[UserController::class,'provider_req'])->name('admin.provider_req');
      Route::get('/providers',[UserController::class,'providers'])->name('admin.providers');
      Route::get('/user/accept/{id}',[UserController::class,'accept'])->name('admin.accept');

  });

});
Auth::routes();


Route::get('/logout',[LoginController::class,'logout']);
Route::get('/', [FrontHomeController::class, 'index'])->name('home');

Route::get('/home', [FrontHomeController::class, 'index']);
Route::get('/profile', [FrontHomeController::class, 'profile']);
Route::post('/updateProfile', [FrontHomeController::class, 'update_profile']);
Route::get('/aboutUs', [FrontAboutController::class, 'about_us']);
Route::get('/categoryProduct/{id}', [IndexController::class, 'categoryProduct']);
Route::get('/productDetails/{id}', [IndexController::class, 'product_details']);
Route::post('/addComent', [ReveiwController::class, 'add_review']);


Route::get('/serviceProviders/{id}', [IndexController::class, 'serviceProviders']);
Route::get('/dashboard', [IndexController::class, 'dashboard']);
Route::Post('/addProduct', [IndexController::class, 'addProduct']);
Route::get('/editProduct/{id}', [IndexController::class, 'editProduct']);
Route::get('/deleteProduct/{id}', [IndexController::class, 'deleteProduct']);
Route::post('/updateProduct/{id}', [IndexController::class, 'updateProduct']);
Route::get('/allServices', [IndexController::class, 'allServices']);




Route::get('/get_result', [FatenController::class, 'data']);
