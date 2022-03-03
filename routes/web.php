<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\TransactionListController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ClientController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::get('/profile/{user}', [ProfilesController::class, 'index'])->middleware(['auth'])->name('profile.show');

Route::get('/report', [ReportsController::class, 'index'])->middleware(['auth'])->name('report.show');
#Route::get('/report/data', [ReportsController::class, 'data'])->middleware(['auth'])->name('report_data.show');

Route::get('/transaction_list', [TransactionListController::class, 'index'])->middleware(['auth'])->name('transaction_list.show');
Route::get('transaction_list/data', [TransactionListController::class, 'data']);

Route::get('/transaction/{transaction}', [TransactionController::class, 'index'])->middleware(['auth'])->name('transaction.show');

Route::get('/client/{transaction}', [ClientController::class, 'index'])->middleware(['auth'])->name('client.show');

// Route::get('/clear-cache', function () {
//     $exitCode = Artisan::call('cache:clear');
//     $exitCode = Artisan::call('config:cache');
//     return 'DONE'; //Return anything
// });

require __DIR__.'/auth.php';
