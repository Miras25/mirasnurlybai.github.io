<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

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

Route::get('/user', function() {
    return "<h1> I'm user </h1>";
});

Route::get('posts/create', function() {
    DB::table('posts')->insert([
        'title' => 'Text',
        'body' => 'Some long text',
    ]);
});

Route::get('/posts', function(){
    $posts = Post::find(1);
    return $posts;
 });
