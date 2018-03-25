@extends('layouts.master')

@section('title')
    CSCI E-15 | Project 3 - Word Scorer w/ Laravel | Word Score
@endsection

@push('head')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    <link href='/css/wordscore.css' type='text/css' rel='stylesheet'>
@endpush

@section('content')
    <p>
        This will show the scoring results for a word with its options<br><br>
        Word: {{ $userWord }}<br>
        Multiplier: {{ $multiplier }}<br>
        Bingo: {{ $bingo }}<br>
        Spelling: {{ $spelling }}<br>
    </p>







@endsection