<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class IdController extends Controller
{
    public function index()
    {

        $tabla = DB::table('Producto')->get();

        return view('tabla', compact('tabla'));
    }
}

