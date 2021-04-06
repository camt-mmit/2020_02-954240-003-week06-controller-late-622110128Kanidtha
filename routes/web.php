<?php

use Illuminate\Support\Facades\Route;

use Psr\Http\Message\ServerRequestInterface;
use App\Http\Controllers\PriceCalculation;


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

Route::get('/ui', function () {
    return view('ui-form');
})->name('ui-form');

Route::post('/ui', function (ServerRequestInterface $request) {
    $data = $request->getParsedBody();
    unset($data['_token']);
    return view('ui-result', [
        'data' => $data,
    ]);
})->name('ui-result');

Route::get('/example-01', function () {
    return view('example-01-form');
})->name('example-01-form');

Route::post('/example-01', function (ServerRequestInterface $request) {
    $data = $request->getParsedBody();
    $price = (double)$data['price'];
    $discount = (double)$data['discount'];
    $discountCost = $discount/100 * $price;
    $netPrice = $price - $discountCost;
    return view('example-01-result', [
        'price' => $price, 'discount' => $discount,
        'discountCost' => $discountCost, 'netPrice' => $netPrice,
    ]);
})->name('example-01-result');

Route::get('/area', function () {
    return view('area-form');
})->name('area-form');

Route::post('/area', function (ServerRequestInterface $request) {
    $data = $request->getParsedBody();
    $type = $data['type'];
    $width = $data['width'];
    $height = $data['height'];
    $area = $width * $height;
    if ($type=='Rectangular'){
        $area = $width * $height;
    }
        else{
        $area = 0.5 * $width * $height;  
        }
    
    return view('area-result', [
        'type' => $type, 
        'width' => $width,
        'height' => $height, 
        'area' => $area,
    ]);
})->name('area-result');

Route::get('/mul', function () {
    return view('mul-form');
})->name('mul-form');

Route::post('/mul', function (ServerRequestInterface $request) {
    $data = $request->getParsedBody();
	$n = $data['n'];
    return view('mul-result', [
        'n' => $n,
    ]);
})->name('mul-result');

Route::get('/price-calculation', [PriceCalculation::class, 'form'])
->name('price-calculation-form');
Route::post('/price-calculation', [PriceCalculation::class, 'result'])
->name('price-calculation-result');

Route::get('/mul2', function () {
    return view('mul2-form');
})->name('mul2-form');

Route::post('/mul2', function (ServerRequestInterface $request) {
    $data = $request->getParsedBody();
	$n = $data['n'];
    return view('mul2-result', [
        'n' => $n,
    ]);
})->name('mul2-result');