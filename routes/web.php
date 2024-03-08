<?php

use App\Models\Jewellery;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelescopeController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PasswordController;
use App\Http\Controllers\Admin\JewelleryController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\WorkingHourController;
use App\Http\Controllers\Admin\MarketLeaderController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\SubscriptionController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\JewelleryImageController;
use App\Http\Controllers\Admin\SubscriptionPlanController;

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

Route::get('/privacy_policy', function () {
    return view('privacy_policy');
});

// Route::get('/about_us', function () {
//     return view('about_us');
// });

Route::get('/terms_condition', function () {
    return view('terms_condition');
});
Route::get('/disclaimer', function () {
    return view('disclaimer');
});

Route::name('admin.')->group(function () {
    Route::redirect('/', 'login');
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/signin', [LoginController::class, 'store'])->name('signin');

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');
        Route::get('change-password', [PasswordController::class, 'index'])->name('index.change-password');
        Route::post('update-password', [PasswordController::class, 'update'])->name('update-password');
        Route::get('/home', HomeController::class)->name('home');


        //user
        Route::get('/users', [UserController::class, 'index'])->name('users');
        Route::get('/update_status/{id}', [UserController::class, 'update'])->name('update_status');
        Route::get('/create-user', [UserController::class, 'create'])->name('create-user');
        Route::post('/add-user', [UserController::class, 'store'])->name('add-user');

        //projects
        Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
        Route::get('/create-project', [ProjectController::class, 'create'])->name('create-project');
        Route::post('/add-project', [ProjectController::class, 'store'])->name('add-project');
        Route::delete('/delete-project/{id}', [ProjectController::class, 'destroy'])->name('delete-project');

        //Working Hour
        Route::get('/working_hours', [WorkingHourController::class, 'index'])->name('working_hours');
        Route::get('/create-working_hour', [WorkingHourController::class, 'create'])->name('create-working_hour');
        Route::post('/add-working_hour', [WorkingHourController::class, 'store'])->name('add-working_hour');
        Route::post('/update-working_hour', [WorkingHourController::class, 'update'])->name('update-working_hour');
        Route::get('/edit-working_hour/{id}', [WorkingHourController::class, 'edit'])->name('edit-working_hour');
        Route::delete('/delete-working_hour/{id}', [WorkingHourController::class, 'destroy'])->name('delete-working_hour');
    });
});
