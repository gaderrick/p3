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
        $this->validate($request, [
            'userWord' => 'required|min:2|max:7',
            'multiplier' => 'required|in:none,double,triple',
            'bingo' => 'in:on,off,null',
            'spelling' => 'in:on,off,null',
        ]);

        // scoring.php needs to go in here

        $userWord = $request->input('userWord');
        $multiplier = $request->input('multiplier');
        $bingo = $request->input('bingo','off');
        $spelling = $request->input('spelling','off');





        return view('word.score')->with(['userWord' => $userWord, 'multiplier' => $multiplier, 'bingo' => $bingo, 'spelling' => $spelling]);
    }
}
