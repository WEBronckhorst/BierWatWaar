<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\OrganizationController;

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


Route::middleware(['auth:sanctum', 'verified'])->get('dashboard', function () {
    return view('dashboard');
});
Route::middleware(['auth:sanctum', 'verified'])->get('admin/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->
get('/dashboard/page', [PageController::class, 'index'])->name('dashboard.page.index'); // create, 'PageController@index')->name('dashboard_page_index');

Route::domain('{subdomain}.bierwatwaar.test')->group(function () {
     Route::get('/', [OrganizationController::class, 'show'])->name('organization');
     Route::get('/{slug}', [EventsController::class, 'show'])->name('event.show');

});

    Route::get('wetools.nl', [EventsController::class, 'show_index'])->name('home');




///// dashboard organization /////
Route::get('/admin/organization',[OrganizationController::class, 'index'])->name('admin.organization');
Route::get('/admin/organization/new', function () {
    return view('admin.organization.new');
})->name('admin.organization.new');
Route::get('/admin/organization/edit/{id}', [OrganizationController::class, 'edit'])->name('admin.organization.edit');
Route::get('/admin/organization/store',[OrganizationController::class, 'store'])->name('admin.organization.store');
Route::post('/admin/organization/update/{id}',[OrganizationController::class, 'update'])->name('admin.organization.update');
Route::get('/admin/organization/destroy/{id}',[OrganizationController::class, 'destroy'])->name('admin.organization.destroy');

///// dashboard event /////
Route::get('/admin/event',[EventsController::class, 'index'])->name('admin.event');
Route::get('/admin/event/new', [EventsController::class, 'create'])->name('admin.event.new');
Route::get('/admin/event/edit/{id}', [EventsController::class, 'edit'])->name('admin.event.edit');
Route::get('/admin/event/store',[EventsController::class, 'store'])->name('admin.event.store');
Route::POST('/admin/event/update/{id}',[EventsController::class, 'update'])->name('admin.event.update');
Route::get('/admin/event/destroy/{id}',[EventsController::class, 'destroy'])->name('admin.event.destroy');
