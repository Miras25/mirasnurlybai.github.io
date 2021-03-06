<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MailController;

use App\Models\Blog;

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
    return view('index');
});

Route::get('blog/add', function() {
    DB::table('blog')->insert([
        'title' => 'Summary',
        'body'=> 'Im looking forward to summer'
    ]);
});


Route::get('blog', [BlogController::class, 'index']);
Route::get('blog/create', function(){
    return view('blog.create');
});

Route::post('blog/create', [BlogController::class, 'store'])->name('add-blog');

Route::get('blog/{id}', [BlogController::class, 'get_blog']);

Route::get('/form','App\Http\Controllers\UploadController@index');

Route::post('/addimage','App\Http\Controllers\UploadController@store')->name('addphoto');

Route::get('mail/send', 'App\Http\Controllers\MailController@send');

Route::get('/{lang}', function($lang){
    App::setlocale($lang);
    return view('index');
});
