 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;

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

Route::get('/', function () {
    return view('welcome');
});



 Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
     Route::get('login', [AdminAuthController::class, 'loginForm'])->name('loginForm');

     // Admin / User Dashboard
     Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
 });



