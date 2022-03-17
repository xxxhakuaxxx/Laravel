<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class Jissyu6_1Controller extends Controller
{
    public function index(Request $request)
    {
        $items = Person::find($request->input);
        $param = ['input' => $request->input, 'item' => $items];
        return view('jissyu6_1.index', $param);
    }
    public function find(Request $request)
    {
        $item =  Person::find($request->input);
        return view('jissyu6_1.find', ['item' => $item]);
    }

}
