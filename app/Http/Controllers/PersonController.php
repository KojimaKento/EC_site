<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Request $request) {
        $item = Peson::all();
        return view('person.index', ['items => $items']);
    }
}
