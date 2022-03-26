<?php
use App\Http\Controllers\LaravelhtmlController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\BlogController;
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

Route::get('/', [LaravelhtmlController::class, 'index'], function () {
    return view('welcome');
});

Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'admin'])->name('admin');
    Route::resource('products', ProductController::class);
    Route::resource('blogs', BlogController::class);
    Route::get('post',['App\Http\Controllers\PostController' , 'index']);
    Route::post('post-sortable',['App\Http\Controllers\PostController' , 'update']);

    Route::get('post', [App\Http\Controllers\PostController::class, 'index'])->name('sorting');
    Route::post('post-sortable', [App\Http\Controllers\PostController::class, 'update']);

});
Route::get('/contact-us', [App\Http\Controllers\ContactUsFormController::class, 'createForm'])->name('contact');
Route::post('/contact-us', [App\Http\Controllers\ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');




Route::get('/blog', [App\Http\Controllers\LaravelhtmlController::class, 'blog'])->name('blog');


    Route::get('/index', [App\Http\Controllers\LaravelhtmlController::class, 'index'])->name('index');
Route::get('/about-us', [App\Http\Controllers\LaravelhtmlController::class, 'about'])->name('about');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('importExportView', [ExcelController::class, 'importExportView'])->name('importExportView');
// Route for export/download tabledata to .csv, .xls or .xlsx
Route::get('exportExcel/{type}', [ExcelController::class, 'exportExcel'])->name('exportExcel');
// Route for import excel data to database.
Route::post('importExcel', [ExcelController::class, 'importExcel'])->name('importExcel');
