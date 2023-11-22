<?php

namespace App\Http\Controllers;

use App\Classes\Calculator;
use App\Http\Requests\CalculatorRequest;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function __invoke(CalculatorRequest $request)
    {
        $nombre1 = (double) $request->get("number1");
        $nombre2 = (double) $request->get("number2");
        $operation = $request->get("operation");
        if ((int) $nombre2 == 0 && $operation == "divide") {
            return back()->withErrors(["number2" => "Impossible de diviser par 0. Assurez-vous que les deux nombres ne sont pas égaux à 0 pour la division"]);
        }
        $calculator = new Calculator($nombre1, $nombre2);

        $result = match ($operation) {
            "divide" => $calculator->divide(),
            "add" => $calculator->add(),
            "subtract" => $calculator->subtract(),
            "multiply" => $calculator->multiply(),

        };

        return back()->with("result", $result);

    }
}