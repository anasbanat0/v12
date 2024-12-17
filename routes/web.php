<?php

// use, namespace
// Download PHP Namespace Resolver Extension
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


// Route::get(url, action);
// Route::post(url, action);
// Route::put(url, action);
// Route::patch(url, action);
// Route::delete(url, action);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/new', function () {
//     return 'new route';
// });

// Route::get('user/{name?}', function($name = '') {
//     return 'user '.$name;
// })->whereAlphaNumeric('name');

// include 'admin.php';

// Route::view('/', 'welcome');
// Route::get('/', function() {
//     return view('welcome');
// });



// Route::get('/', [TestController::class, 'index']);

Route::get('/', [TestController::class, 'index'])->name('test.index');
Route::get('/contact', [TestController::class, 'contact'])->name('test.contact');
Route::get('/team', [TestController::class, 'team'])->name('test.team');
Route::get('/services', [TestController::class, 'services'])->name('test.services');
Route::get('/about', [TestController::class, 'about'])->name('test.about');
