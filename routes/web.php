<?php

use Illuminate\Support\Facades\Route;
use Illuminate\http\Request;

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

Route::get('/home', function () {
    $name= 'Ayesha';
    return view('home', ['name'=> $name, 'email'=> 'ayesha@gmail.com']);
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/gl_accounts', function () {
    return view('accounts.admin.gl_accounts');
});

Route::get('/customer', function () {
    return view('customer');
});

Route::get('/products', function () {

    $products= array(
        array('name'=>'Apple i Phone', 'price'=>'180000', 'discount'=>5000),
        array('name'=>'Samsung Galaxy', 'price'=>'100000', 'discount'=>25000),
        array('name'=>'MSI Laptop', 'price'=>'100000', 'discount'=>0)
    );

    return view('products', ['products'=> $products]);
});

Route::post('/products/add', function (Request $request) {
    echo $request->name .'<br>';
    echo $request->price .'<br>';
})->name('product.add');

Route::put('/product/add', function (Request $request) {
    echo 'This is the put method <br>';
    echo $request->name .'<br>';
    echo $request->price .'<br>';
})->name('product.add');

Route::post('product/{id}', function ($id) {

    $products= array('name'=>'Apple i Phone', 'price'=>'180000', 'discount'=>5000);
    return $products;
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
