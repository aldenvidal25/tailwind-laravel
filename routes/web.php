<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
// Route::get();
// Route::post();
// Route::patch();
// Route::put(); // update kabuooan
// Route::delete();
// Route::options(); // control allow ng contents, di talaga masyadong ginagamit


// Route::get('/home', function () {
//     // return view('welcome');
//     return 'Home - Uwian na';
// });

// Route::match(['get', 'post'], '/', function () {
//     return 'Post and Get is allowed';
// });

// Route::any('/welcome', function () {
//     return 'Welcome';
// });

// Route::any('/welcome', function () {
//     return view('Welcome');
// });

// Route::view('/welcome', 'welcome');

// Route::redirect('/welcome', '/'); // redirect to velow routing

// Route::get('/', function () { //redirect to root
//     return 'redirected';
// });

// Route::permanentRedirect('/welcome', '/', 301);

// Route::get('/', function () { //redirect to root
//     return 'Welcome!';
// });

// Route::get('/users', function (Request $request) {
//     dd($request);
//     return null;
// });

// Route::get('/get-text', function () {
//     return response('Hello Kodego SP404', 200)
//         ->header('Content-type', 'text/plain');
// });

// Route::get('/user/{id}', function ($id) {
//     return response($id, 200);
// });

// Route::get('/user/{id}/{group}', function ($id, $group) {
//     return response($id . '-' . $group, 200);
// });

// Route::get('request-json', function () {
//     return response()->json(['name' => 'Ryan', 'age' => '19']); // mas maganda sa firefox
// });

// Route::get('/request-download', function () {
//     $path = public_path() . '/sample.txt';
//     $name = 'sample.txt';
//     $headers = array(
//         'Content-Type: application/text-plain',
//     );
//     return response()->download($path, $name, $headers);
// });

// Route::get('/', function () { //redirect to root
//     return view('welcome'); // welcome.blade
// });

// Route::get(
//     '/',
//     [StudentsController::class, 'index']
// );

// Route::get('/users', [UserController@index]);
// Route::get('/users', 'App\Http\Controllers\UserController@index'); //
// Route::get('/user/{id}');
//pag di authenticated bawal ma access, using middleware
// Route::get('/user/{id}', [UserController::class, 'show'])->middleware('auth');
// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [StudentsController::class, 'index']);
Route::get('/register', [UserController::class, 'register']);

Route::get('/login', [UserController::class, 'login']);



// Route::get('/', [StudentsController::class, 'index']);

// Route::get('/users', [UserController::class, 'index'])->name('login');

// Route::get('/user/{id}', [UserController::class, 'show']);

// Route::get('/students', [StudentsController::class, 'index']);

// Route::get('/students/{id}', [StudentsController::class, 'show']);

// Route::get('/students', function () {
//     return view('index');
// });
