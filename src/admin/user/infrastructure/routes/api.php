<?php

use Illuminate\Routing\Route;
use Src\admin\user\infrastructure\controllers\CreateUserPOSTController;
use Src\admin\user\infrastructure\controllers\GetUserByIdGETController;

Route::get('/{id}', [GetUserByIdGETController::class, 'index']);
Route::post('/store', [CreateUserPOSTController::class, 'index']);
