<?php

use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardsController;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

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
    return view('auth.login');
});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/dashboards', [DashboardsController::class, 'index']);
    Route::get('/employees', [EmployeesController::class, 'index']);
    Route::get('/employees/create', [EmployeesController::class, 'create']);
    Route::post('/employees', [EmployeesController::class, 'store']);
    Route::get('/employees/{employees}/edit', [EmployeesController::class, 'edit']);
    Route::patch('/employees/{employees}', [EmployeesController::class, 'update']);
    Route::get('/employees/{employees}', [EmployeesController::class, 'destroy']);
    // Route::get('/employees/{employees}', [EmployeesController::class, 'search']);

    Route::get('/members', [MembersController::class, 'index']);
    Route::get('/members/create', [MembersController::class, 'create']);
    Route::post('/members', [MembersController::class, 'store']);
    Route::get('/members/{members}/edit', [MembersController::class, 'edit']);
    Route::patch('/members/{members}', [MembersController::class, 'update']);
    Route::get('/members/{members}', [MembersController::class, 'destroy']);
    // Route::get('/members/{members}', [MembersController::class, 'exportExcel']);

    Route::get('/books', [BooksController::class, 'index']);
    Route::get('/books/create', [BooksController::class, 'create']);
    Route::post('/books', [BooksController::class, 'store']);
    Route::get('/books/{books}/edit', [BooksController::class, 'edit']);
    Route::patch('/books/{books}', [BooksController::class, 'update']);
    Route::get('/books/{books}', [BooksController::class, 'destroy']);
    // Route::get('/books/{books}', [BooksController::class, 'exportExcel']);

    Route::get('/transactions', [TransactionsController::class, 'index']);
    Route::get('/transactions/create', [TransactionsController::class, 'create']);
    Route::post('/transactions', [TransactionsController::class, 'store']);
    Route::get('/transactions/{transactions}/edit', [TransactionsController::class, 'edit']);
    Route::patch('/transactions/{transactions}', [TransactionsController::class, 'update']);
    Route::get('/transactions/{transactions}/show', [TransactionsController::class, 'show']);
    Route::get('/transactions/{transactions}', [TransactionsController::class, 'destroy']);
    // Route::get('/transactions/{transactions}', [TransactionsController::class, 'exportExcel']);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/logout', function () {
    return view('auth.login');
})->name('auth.login');
