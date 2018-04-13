<?php

namespace App\Http\Controllers;

class PokemonsController extends Controller
{
    public function index()
    {
        return \App\Pokemon::get();
    }
}
