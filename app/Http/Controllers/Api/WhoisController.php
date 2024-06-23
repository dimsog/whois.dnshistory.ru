<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

final class WhoisController extends Controller
{
    public function __invoke(): Response
    {
        return new Response();
    }
}
