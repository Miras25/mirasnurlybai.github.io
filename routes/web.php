<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BlockController;

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

Route::get('blog', function() {
    $blog = Blog::find(1);
    return "$blog";
});

Route::get('b', [BlockController::class, 'index']);

