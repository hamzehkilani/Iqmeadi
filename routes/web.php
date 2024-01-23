<?php

use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\ImagePost;
use App\Http\Controllers\Admin\InfoCompanyController;
use App\Http\Controllers\Admin\Sector;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SocialMedia;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\WorkUsImage;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Client\ClientController as ClientClientController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RandomImages;
use App\Models\Client;
use App\Models\Image;
use App\Models\Service;
use App\Models\User;
use App\Models\Video;
use Illuminate\Support\Facades\Route;
use function GuzzleHttp\Promise\all;

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
    return view('welcome');
})->name('welcome');



//  User
Route::get('randomImage', [RandomImages::class, 'saveImages']);

Route::get('clients', function () {
    return view('Clients.clients');
})->name('clients');

Route::get('/dashboard', function () {
    $clients = Client::all()->count();
    $images = Image::all()->count();
    $reels = Video::all()->count();

    $users = User::all()->count();
    return view('dashboard', compact('clients', 'images', 'reels', 'users'));
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    //  User
    Route::resource('user', UserController::class);

    Route::get('block/{id}', [UserController::class, 'block'])->name('block');

    Route::get('unBlock/{id}', [UserController::class, 'unBlock'])->name('unBlock');

    //  Sector
    Route::resource('sector', Sector::class);


    //  Client
    Route::resource('client', ClientController::class);

    // Route::resource('service', ServiceController::class);


    //  Team
    Route::resource('team', TeamController::class);


    //  Info Comapny
    Route::resource('infoCompany', InfoCompanyController::class);


    // Footer
    Route::resource('footer', FooterController::class);


    // Image
    Route::resource('images', ImageController::class);

    Route::post('filterImages', [ImageController::class, 'filter'])->name('filter');


    // ImagePost
    Route::resource('imagePost', ImagePost::class);
    Route::post('filterPosts', [ImagePost::class, 'filter'])->name('filterPosts');

    // Videos
    Route::resource('video', VideoController::class);
    Route::post('filterVideo', [VideoController::class, 'filterVideo'])->name('filterVideo');


    //Work us

    Route::get('/Workus', [WorkUsImage::class, 'index'])->name('showWorkUsView');
    Route::get('/AddWorkus', [WorkUsImage::class, 'addindex'])->name('AddWorkUsView');
    Route::post('/delete/{id}', [WorkUsImage::class, 'Deleteimage'])->name('Workusdelete');
    Route::post('/AddWorkus', [WorkUsImage::class, 'store'])->name('WorkUsImages');
    //end Work us
    Route::resource('contact', ContactController::class);

    Route::post('ReplayMessage', [ContactController::class, 'ReplayMessage'])->name('ReplayMessage');

    //Social Media
    Route::resource('SocialMedia', SocialMedia::class);
});


// Client

Route::resource('clients', ClientClientController::class);


Route::get('clients/showPhotos/{id}', [ClientClientController::class, 'showPhotos'])->name('showPhotos');

Route::get('clients/showReels/{id}', [ClientClientController::class, 'showReels'])->name('showReels');

Route::resource('showPosts', ImagePost::class);
require __DIR__ . '/auth.php';
