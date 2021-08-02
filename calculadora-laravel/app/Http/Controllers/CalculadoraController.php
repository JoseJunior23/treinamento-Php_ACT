<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $operator = $request->operator;
        switch ($operator) {
            case 0:
                $result = ($num1 + $num2);
                break;
            case 1:
                $result = ($num1 - $num2);
                break;
            case 2:
                $result = ($num1 * $num2);
                break;
            case 3:
                $result = ($num1 / $num2);
                break;
        }
        return view(
            'resultado',
            compact('result')
        );
    }
}
