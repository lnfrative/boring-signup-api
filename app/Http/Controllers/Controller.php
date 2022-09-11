<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected function successResponse(mixed $data, int $code = 200): JsonResponse
    {
        return response()->json(['success'=> true, 'data' => $data], $code);
    }
}
