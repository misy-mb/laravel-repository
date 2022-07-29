<?php


//AdminController
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\auth\RegisterController;
use App\Http\Controllers\Admin\auth\ForgotPasswordController;
use App\Http\Controllers\Admin\TodoController;
use App\Http\Controllers\Admin\UserController;
//FrontendController
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Frontend\FrontendController;

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

Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class,'login'])->name('login');
    Route::post('/login', [AuthController::class,'postlogin'])->name('postlogin');
    Route::post('/logout', [AuthController::class,'logout'])->name('logout');
    Route::get('/register', [RegisterController::class,'show'])->name('register.show');
    Route::post('/register', [RegisterController::class,'register'])->name('register.store');
    //reset pass
    Route::get('/forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
    Route::post('/forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
    Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('/reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
     //
    Route::get('/',[DashboardController::class,'index'])->name('dashboard')->middleware('admin_auth');
    Route::resource('slider',SliderController::class)->middleware('admin_auth');
    Route::resource('user', UserController::class)->middleware('admin_auth');
    Route::resource('role', RoleController::class)->middleware('admin_auth');
    Route::resource('permission', PermissionController::class)->middleware('admin_auth');
    Route::resource('todo', TodoController::class)->middleware('admin_auth');

});

//frontend route
Route::get('/',[FrontendController::class,'index'])->name('homepage');
Route::get('/menu',[FrontendController::class,'menu'])->name('menu');
Route::get('/contact-us',[FrontendController::class,'contact_us'])->name('contact-us');
Route::get('/about-us',[FrontendController::class,'about_us'])->name('about-us');
Route::get('/service',[FrontendController::class,'service'])->name('service');
Route::get('/gallery',[FrontendController::class,'gallery'])->name('gallery');
Route::get('/blog',[FrontendController::class,'blog'])->name('blog');
Route::get('/blog/{id}',[FrontendController::class,'blog_detail'])->name('blog-detail');
Route::get('/poducts', [FrontendController::class, 'productList'])->name('products.list');

