<?php

Route::get('/', function () {
    return view('MainPage');
});

Route::get('/score/{userWord?}/{multiplier?}/{bingo?}/{spelling?}', function ($userWord = '', $multiplier = '', $bingo = 'off', $spelling = 'off') {
    // Do validation checks
    if ($bingo=='off') {
        return 'Bingo was not set';
    }

    // Process the word
});
