<?php

use Illuminate\Support\Facades\Route;

use App\TestPayment\Factories\TestSaleEntityFactory;
use App\TestPayment\Services\TestPaymentAPIService;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $entity = (new TestSaleEntityFactory())->make();
    $resonce = (new TestPaymentAPIService())->makeSaleRequest($entity);
    dd(json_decode($resonce->body()));
});
