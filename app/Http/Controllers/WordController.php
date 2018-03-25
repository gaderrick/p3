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
            'userWord' => 'required|alpha|min:2|max:7',
            'multiplier' => 'required|in:none,double,triple',
            'bingo' => 'in:on,off,null',
            'spelling' => 'in:on,off,null',
        ]);

        // By this point we have validated data to work with; start the scoring process
        $userWord = $request->input('userWord');
        $multiplier = $request->input('multiplier');
        $bingo = $request->input('bingo', 'off');
        $spelling = $request->input('spelling', 'off');
        $score = 0;
        $options = 0;

        // Start the scoring process
        // Read the JSON file containing the default scores for letters into an array '$letters'
        $lettersJSON = file_get_contents('data/letters.json');
        $letters = json_decode($lettersJSON, true);

        // Check the spelling of the submitted word
        if ($spelling) {
            // $showScoreOptions++; (NEEDED????)
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://od-api.oxforddictionaries.com:443/api/v1/entries/en/' . $userWord);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'app_id: 1e45975c',
                'app_key: b1fca98eda5777bfc5435a4a908be849'
            ));
            $apiResult = trim(curl_exec($ch));
            curl_close($ch);
        } else {
            $apiResult = 'Not JSON';
        }

        // Only a properly formed JSON response will get a true value with the isJson function
        json_decode($apiResult);
        $isRealWord = (json_last_error() == JSON_ERROR_NONE);

        // Loop over each letter in $wordToCheck and add up its score based on the values in $letters
        for ($i = 0; $i < strlen($userWord); $i++) {
            $tempLetter = $userWord[$i];
            $score = $score + $letters[$tempLetter];
        }

        // Modify the score by the multiplier factor
        switch ($multiplier) {
            case 'double':
                $score = $score * 2;
                $options++;
                break;
            case 'triple':
                $score = $score * 3;
                $options++;
                break;
        }

        // Apply the bingo score modification if selected
        if ($bingo == 'on') {
            $score = $score + 50;
            $options++;
        }

        return view('word.score')->with(
            ['userWord' => $userWord, 'multiplier' => $multiplier, 'bingo' => $bingo, 'spelling' => $spelling, 'score' => $score, 'isRealWord' => $isRealWord, 'options' => $options]);
    }
}
