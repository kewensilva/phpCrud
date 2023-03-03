<?php

namespace App\Http\Controllers;

use App\Models\Game as Game;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function __construct()
    {
    
    }
    public function index()
    {
        $games = Game::all();
        return($games);
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $games = Game::create($data);
        return($games);
    }
}
