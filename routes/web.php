<?php



Route::get('/', 'PagesController@index')->name('index');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::post('/contact', function () {
    return view('contact');
    $data = request()->all();
    echo "Email: " . $data['email'] . '<br>';
    echo "Body: " . $data['body'];
});
*/

