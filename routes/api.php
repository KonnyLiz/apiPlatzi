<?php

use App\Http\Controllers\Api\v1\PostController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// creando las rutas de la api
Route::apiResource('v1/posts', PostController::class);

// podemos decir con que metodo trabajaremos si escribimos only
// Route::apiResource('v1/posts', Post::class)->only('show');