<?php

use App\Http\Controllers\AboutCompanyController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyDateController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Front\aboutController;
use App\Http\Controllers\Front\categoryController;
use App\Http\Controllers\Front\contactController;
use App\Http\Controllers\Front\employeeController;
use App\Http\Controllers\Front\faqController;
use App\Http\Controllers\Front\homeController;
use App\Http\Controllers\Front\policyController;
use App\Http\Controllers\Front\productsController;
use App\Http\Controllers\Front\servicesController as FrontServicesController;
use App\Http\Controllers\Front\viewProductController;
use App\Http\Controllers\MainCategoryController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/dash', function () {
    return view('dashboard.pages.index');
 })->name('dashboard');

Route::resource('dashboard/maincategory',MainCategoryController::class);
Route::resource('dashboard/contactus', ContactUsController::class);
Route::resource('dashboard/products', ProductController::class);
Route::resource('dashboard/positions', PositionController::class);
Route::resource('dashboard/people', PeopleController::class);
Route::resource('dashboard/aboutus',AboutUsController::class);
Route::resource('dashboard/questions',QuestionsController::class);
Route::resource('dashboard/services',ServicesController::class);
Route::resource('dashboard/company_date',CompanyDateController::class);
Route::resource('dashboard/aboutcompany',AboutCompanyController::class);
Route::resource('dashboard/admin',AdminController::class);


Route::group(['namespace'=>'Front'] , function () {
    Route::get('/', [homeController::class, 'index'])->name('homePage');
    Route::get('about',[aboutController::class,'index'])->name('about');
    Route::get('category',[categoryController::class,'index'])->name('category');
    Route::get('contact',[contactController::class,'index'])->name('contact');
    Route::get('employee',[employeeController::class,'index'])->name('employee');
    Route::get('faq',[faqController::class,'index'])->name('faq');
    Route::get('policy',[policyController::class,'index'])->name('policy');
    Route::get('category/{id}',[productsController::class,'index'])->name('products');
    Route::get('services',[FrontServicesController::class,'index'])->name('services');
    Route::get('viewProduct',[viewProductController::class,'index'])->name('viewProduct');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
