<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Http\Request;

class ListEventosController extends Controller
{
    public function index()
    {
        return view('layouts.ListEventos', [
            'cards' => Card::all()
        ]); 
    }


}
