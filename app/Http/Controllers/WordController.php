<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordController extends Controller
{
    public function show()
    {
        return view('word.show');
    }

    public function score(Request $request)
    {
        // scoring.php needs to go in here

        $userWord = $request->route('userWord');
        $multiplier = $request->route('multiplier');
        $bingo = $request->route('bingo');
        $spelling = $request->route('spelling');

        return view('word.score')->with(['userWord' => $userWord, 'multiplier' => $multiplier, 'bingo' => $bingo, 'spelling' => $spelling]);
    }
}
