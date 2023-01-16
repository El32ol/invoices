<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvoiceAttachmentsController;
use App\Http\Controllers\InvoiceDetailsController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SectionsController;
use App\Models\invoice_attachments;
use App\Models\invoice_details;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function(){

    Route::get('/', function () {
        return view('auth.login');
    });
    
    Auth::routes();
    // Auth::routes(['register' => false]);
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::resource('invoices', InvoicesController::class);
    Route::resource('sections', SectionsController::class);
    Route::resource('products', ProductController::class);
    Route::resource('InvoiceAttachments',InvoiceAttachmentsController::class);
    Route::get('/section/{id}', [InvoicesController::class ,'getProduct']);
    Route::get('/View_file/{id}/{filname}', [InvoiceAttachmentsController::class ,'View_file']);
    Route::get('/download/{id}/{filname}', [InvoiceAttachmentsController::class ,'download']);
    Route::get('/delete/{id}/{filname}', [invoice_attachments::class ,'show']);
    Route::get('/{page}', [AdminController::class ,'index']);

    Route::get('detailinvoices/{id}', [InvoiceDetailsController::class ,'edit'])->name('detailinvoices');

});