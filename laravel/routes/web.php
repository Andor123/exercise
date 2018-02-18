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

Route::get('/', function () {
    return view('welcome');
});

Route::get('ID/{id}', function ($id) {
    echo 'ID: ' . $id;
});

Route::get('user/{name?}', function ($name = 'Virat') {
    echo 'Name: ' . $name;
});

Route::get('role', [
    'middleware' => 'role: editor',
    'uses' => 'TestController@index'
]);

Route::get('terminate', [
    'middleware' => 'terminate',
    'uses' => 'ABCController@index'
]);

Route::get('/usercontroller/path', [
    'middleware' => 'first',
    'uses' => 'UserController@showPath'
]);

Route::resource('my', 'MyController');

class MyClass{
    public $foo = 'bar';
}
Route::get('/myclass', 'ImplicitController@index');

Route::get('/foo/bar', 'UriController@index');

Route::get('/register', function () {
    return view('register');
});
Route::post('/user/register', array('uses'=>'UserRegistration@postRegister'));

Route::get('/cookie/set', 'CookieController@setCookie');
Route::get('/cookie/get', 'CookieController@getCookie');

Route::get('/header', function () {
    return response("Hello", 200)->header('Content-Type', 'text/html')
        ->withCookie('name', 'Virat Gandhi');
});

Route::get('json', function () {
    return response()->json(['name' => 'Virat Gandhi', 'state' => 'Gurajat']);
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/test2', function () {
    return view('test2');
});

Route::get('blade', function () {
    return view('page', array('name' => 'Virat Gandhi'));
});

Route::get('/test3', ['as' => 'testing', function () {
    return view('test3');
}]);
Route::get('redirect', function () {
    return redirect()->route('testing');
});

Route::get('rr', 'RedirectController@index');
Route::get('/redirectcontroller', function () {
    return redirect()->action('RedirectController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('insert', 'StudInsertController@insertform');
Route::post('create', 'StudInsertController@insert');

Route::get('view-records', 'StudViewController@index');

Route::get('edit-records', 'StudUpdateController@index');
Route::get('edit/{id}', 'StudUpdateController@show');
Route::post('edit/{id}', 'StudUpdateController@edit');

Route::get('delete-records', 'StudDeleteController@index');
Route::get('delete/{id}', 'StudDeleteController@destroy');
