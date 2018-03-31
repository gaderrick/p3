@extends('layouts.master')

@section('title')
    CSCI E-15 | Project 3 - Word Scorer w/ Laravel | Word Score
@endsection

@push('head')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
@endpush

@section('content')

    <div class='col-sm-12 mainArea'>
        <br>
        <b>Your Word</b>:<br><br>
        @for ($i=0; $i < strlen($userWord); $i++)
            <img src='images/{{ $userWord[$i]}}.png' alt='{{ $userWord[$i]}}' class='responsive-image-small'>
        @endfor
        <br><br>
        @if ($options > 0)
            <b>Scored {{ $score }} points with the following options</b>:<br><br>
            <div class='col-sm-12 messageArea alert alert-success'>
                @if ($multiplier=='double')
                    <img class='img-responsive' src='images/double.png' alt='2x Word Score' style='max-width: 75px'
                         id='double'>
                @elseif ($multiplier=='triple')
                    <img class='img-responsive' src='images/triple.png' alt='3x Word Score' style='max-width: 75px'
                         id='triple'>
                @endif

                @if ($bingo=='on')
                    <img class='img-responsive' src='images/bingo.png'
                         alt='Bingo! (Image adapted from http://www.onlinewebfonts.com/icon starter image)'
                         style='max-width: 75px'
                         id='bingoImage'>
                @endif

                @if ($spelling=='on' && $isRealWord)
                    <img class='img-responsive' src='images/spell.png' alt='Spell Check (its a real word)'
                         style='max-width: 75px' id='spell'>
                @endif
            </div>
        @else
            <b>Scored {{ $score }} points</b><br><br>
        @endif
        <a href='/'>Score Another Word</a>
    </div>
@endsection