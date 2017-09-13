<?php
use App\User;
use Illuminate\Support\Facades\Input;
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
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index');
Route::get('/doctors', 'HomeController@showdoctors');
Route::get('/administrators', 'HomeController@showadministrators');
Route::get('/nurses', 'HomeController@shownurses');
Route::get('/profile', 'HomeController@showprofile');



Route::post('/register', 'Auth\RegisterController@create');


Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $user = User::where('fname','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->orWhere('role','LIKE','%'.$q.'%')->orWhere('lname','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
        return view('welcome')->withDetails($user)->withQuery ( $q );
    else return view ('welcome')->withMessage('No Details found. Try to search again !');
});