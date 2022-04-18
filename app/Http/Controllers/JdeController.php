<?php

namespace App\Http\Controllers;

use App\Models\Jde;
use Illuminate\Http\Request;

class JdeController extends Controller
{
    public function index()
    {
        return Jde::all();

        // $response = ['message' => 'equipos index'];
        // return response($response, 200);
    }

    public function raiz()
    {
        $rta = Jde::all();

        return view('welcome', compact('rta'));
    }
}
