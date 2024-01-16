<?php

use App\Models\Post;
use App\Models\Gallery;
use Spatie\Sitemap\Sitemap;
use Illuminate\Http\Request;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\HeadlineController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\FasilitasWisataController;
use App\Http\Controllers\CategoryDashboardController;

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

Route::get('/', [MainController::class, 'index']);

Route::get('/admin', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('throttle:loginc');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/logout', [LoginController::class, 'logout']);


Route::resource('/dashboard/comment', CommentController::class)->middleware('auth');
Route::resource('/dashboard/headline', HeadlineController::class)->middleware('auth');
// Route::resource('/dashboard/fasilitas', FacilityController::class)->middleware('auth');
Route::resource('/dashboard/gallery', GalleryController::class)->middleware('auth');
Route::resource('/dashboard/facility', FacilityController::class)->middleware('auth');
Route::resource('/dashboard/about', AboutController::class)->middleware('auth');
Route::get('/dashboard/kontak/edit', [KontakController::class, 'show'])->middleware('auth');
Route::post('/dashboard/kontak/update', [KontakController::class, 'update'])->middleware('auth');
Route::get('/sitemap', function () {
    $sitemap = Sitemap::create();
        // ->add(Url::create('/about-us'))
        // ->add(Url::create('/contact_us'));

    $post = Post::all();
    foreach ($post as $post) {
        $sitemap->add(Url::create("/post/{$post->slug}"));
    }
    $sitemap->writeToFile(public_path('sitemap.xml'));
    // return redirect('/sitemap.xml');
    return redirect('/dashboard')->with('success', 'Sitemap Has Been Updated');
});