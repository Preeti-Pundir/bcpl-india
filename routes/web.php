<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\PageController;
use App\Mail\contactus;
use Illuminate\Support\Facades\Mail;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/contact', [ContactUsFormController::class, 'createForm'])->name('createForm');
Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
Route::get('/about', [PageController::class, 'AboutPage'])->name('about');
Route::get('/Brands', [PageController::class, 'Brands'])->name('Brands');
Route::get('/prestige', [PageController::class, 'Prestige'])->name('Prestige');
Route::get('/popular', [PageController::class, 'Popular'])->name('Popular');
Route::get('/lifestyle', [PageController::class, 'Lifestyle'])->name('Lifestyle');
Route::get('/fashion', [PageController::class, 'Fashion'])->name('Fashion');
Route::get('/', [PageController::class, 'Index'])->name('Index');
Route::get('/Maisondeperfums', [PageController::class, 'Maisondeperfums'])->name('Maisondeperfums');
Route::get('/Ourstores', [PageController::class, 'Ourstores'])->name('Ourstores');
Route::get('/Storelocator', [PageController::class, 'Storelocator'])->name('Storelocator');
Route::get('/GetStoreImage/{id}', [PageController::class, 'GetStoreImage'])->name('getstoreimage');

Route::get('/mailable', function () {
    $data=[
        "department_user_name"=>"Paras",
        "name"=>"bhautik",
        "mobail"=>"6358006532",
        "email"=>"abcd@gmail.com",
        "msg"=>"abara ka dabara",
        "subject"=>"other"
    ];
    Mail::to('dndtecnosol@gmail.com')->send(new contactus($data));
    return "mail send success";
});
