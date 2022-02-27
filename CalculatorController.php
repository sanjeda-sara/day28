<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Example;

class CalculatorController extends Controller
{
    protected $result;

    public function getResult(Request $request)
    {
        switch ($request -> option)
        {
            case '+': $this->result = $request->first_number + $request->last_number;
            break;
            case '-': $this->result = $request->first_number - $request->last_number;
            break;
            case '*': $this->result = $request->first_number * $request->last_number;
            break;
            case '/': $this->result = $request->first_number / $request->last_number;
            break;
        }
        return redirect()->back()->with('result', $this->result);
    }
    public function returnName()
    {
        $example = new Example();
        $example = $this->returnName();
    }
}
