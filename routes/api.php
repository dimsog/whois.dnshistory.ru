<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\WhoisController;

Route::get('/whois', [WhoisController::class]);
