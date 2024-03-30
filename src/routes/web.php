<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   $res = \App\Models\Movie::limit(10)->get()->toJson();
});
