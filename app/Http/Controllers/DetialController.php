<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetialController extends Controller
{
    public function detial(REQUEST $request)
    {
        return view('pages.Infocadidate');
    }

}
