<?php

namespace App\Http\Controllers;

use App\Models\Fight;

class FightController extends Controller
{
    public function index()
    {
        $fights = Fight::all();

        return view('fights.index', [
            'fights' => $fights,
        ]);
    }
}
