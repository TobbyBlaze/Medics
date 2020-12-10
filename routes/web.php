<?php
use App\Post;

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
    $posts = Post::orderBy('posts.created_at', 'desc')->paginate(1);
    $opost = Post::orderBy('posts.created_at', 'desc')->paginate(1);
    return view('homepage.index', compact('posts', 'opost'));
});

Auth::routes();

Route::get('/about', function () {
    $posts = Post::orderBy('posts.created_at', 'desc')->paginate(1);
    $opost = Post::orderBy('posts.created_at', 'desc')->paginate(1);
    return view('homePage.about', compact('posts', 'opost'));
});

Route::get('/contact', function () {
    $opost = Post::orderBy('posts.created_at', 'desc')->paginate(1);
    return view('homePage.contact', compact('opost'));
});

// Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function(){
    Route::get('/home', 'MedicalController@index')->name('home');
    Route::get('/bookings', 'MedicalController@create')->name('bookings');
    Route::get('/edit-bookings/{id}', 'MedicalController@edit')->name('edit-bookings');
    Route::any('/appointment', 'MedicalController@store')->name('appointment');
    // Route::any('{id}/edit-appointment', 'MedicalController@update')->name('edit-appointment');
    Route::any('/edit-appointment/{id}', 'MedicalController@update')->name('edit-appointment');
    Route::any('/stEdit-appointment/{id}', 'MedicalController@stUpdate')->name('stEdit-appointment');
    Route::any('{id}/delete-appointment', 'MedicalController@destroy')->name('delete-appointment');
    // Route::get('student/bookings', 'MedicalController@create')->name('bookings');
    // Route::resource('', 'MedicalController');

    Route::get('/edit-post/{id}', 'PostController@edit')->name('edit-post');
    Route::any('/post', 'PostController@store')->name('post');
    Route::any('/update-post/{id}', 'PostController@update')->name('update-post');

    Route::get('export', 'CsvFileController@export')->name('export');
    Route::get('importExportView', 'CsvFileController@importExportView');
    Route::post('import', 'CsvFileController@import')->name('import');

    Route::any('/changePassword', 'MedicalController@pwEdit');
    Route::any('/pwUpdate', 'MedicalController@pwUpdate')->name('pwUpdate');

    Route::any('/edit', 'UserController@edit')->name('edit');
    Route::any('/edit/{id}', 'UserController@update')->name('edit-profile');

});



