<?php

Route::get('/', 'WordController@show');

Route::get('/score/{userWord?}/{multiplier?}/{bingo?}/{spelling?}', 'WordController@score');
