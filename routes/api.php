<?php

use Illuminate\Support\Facades\Route;
use Sdkconsultoria\OpenAiApi\OpenAiApi;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::namespace('Sdkconsultoria\OpenAiApi\Http\Controllers')
    ->prefix('api/v1')
    ->group(function () {
        Route::get('whatsapp-webhook', 'WebhookController@subscribe')->name('meta.webhook.subscribe');
        Route::post('whatsapp-webhook', 'WebhookController@webhook')->name('meta.webhook');
    });

Route::namespace('Sdkconsultoria\OpenAiApi\Http\Controllers')
    ->prefix('api/v1')
    ->group(OpenAiApi::routes());
