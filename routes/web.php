<?php

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

use Illuminate\Http\Request;
use App\Models\Question;
use App\User;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/surveys/create', function () {
    return view('surveys.create');
});
Route::post('/insert', 'SurveyController@insert');
Route::get('/home', 'HomeController@index')->name('home');








////////=========================================================================================

Route::get('/api/auth',function(Request $request){
    $user= User::get();
    return $user->first_name;
    // $isSucess =  $request->username ==$user->username &&  $request->password ==$user->password ? "True" : "False"; 
    // return $isSucess;
});
Route::get('/api/get_questions',function(Request $request){
    $questions = Question::get();
    return $questions;
});
//API login 
// Route::get('/api/auth',function(Request $request){
//     $isSucess =  $request->username =="abc" &&  $request->password =="123" ? "True" : "False"; 
//     return $isSucess;
// });
//API get Questions
// Route::get('/api/get_questions',function(Request $request){
//     $questions = Question::get();
//     return $questions;
// });

Route::get('web_role/get','Auth\RegisterController@create');