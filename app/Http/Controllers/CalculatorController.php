<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalculatorRequest;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function __invoke(CalculatorRequest $request)
    {
        // ...
        dd($request->all());
    }
}
