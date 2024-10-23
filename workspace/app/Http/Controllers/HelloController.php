<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function greet()
    {
        return 'hello world';
    }

    public function greetWithName($name)
    {
        return 'hello world ' . $name;
    }
    public function greetWithParams(Request $request)
    {
        $name = $request->query('name', 'world'); // Obtiene el nombre de la cadena de consulta
        return response()->json(["message" => "hello world $name"]);
    }
}