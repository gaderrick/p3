@extends('layouts.master')

@section('title')
    CSCI E-15 | Project 3 - Word Scorer w/ Laravel | Enter Word to Score
@endsection

@push('head')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    {{-- <link href='/css/books/show.css' type='text/css' rel='stylesheet'> --}}
@endpush

@section('content')
    <h4 style="text-align: center">Enter the word you want to score below</h4>
    <div class='col-sm-12 mainArea'>
        <form method='GET' action='/score' name='main'>
            <div class='row' style='padding-top: 5px; padding-bottom: 15px'>
                <div class='col-sm-6 formText' style='text-align: right'>
                    <label for='userWord'>Word to score (required):</label>
                </div>
                <div class='col-sm-6' style='text-align: left'>
                    <input type='text' name='userWord' style='width: 150px' id='userWord'
                           placeholder='(max of 7 letters)'
                           maxlength='7'
                           value='{{old('userWord')}}'>
                    @include('modules.error-field', ['field' => 'userWord'])
                </div>
            </div>
            <div class='row' style='padding-bottom: 15px'>
                <div class='col-sm-6 formText' style='text-align: right'>
                    <label for='multiplier'>Score Multiplier:</label>
                </div>
                <div class='col-sm-6' style='text-align: left'>
                    <select name='multiplier' id='multiplier' style='text-align: left'>
                        <option value='none' {{(old('multiplier')=='none')?'selected':''}} >
                            None
                        </option>
                        <option value='double' {{(old('multiplier')=='double')?'selected':''}}>
                            Double Word
                        </option>
                        <option value='triple' {{(old('multiplier')=='triple')?'selected':''}}>
                            Triple Word
                        </option>
                    </select>
                    @include('modules.error-field', ['field' => 'multiplier'])
                </div>
            </div>
            <div class='row' style='padding-bottom: 15px'>
                <div class='col-sm-6 formText' style='text-align: right'>
                    <label for='bingo'>Bingo! (+50 pts)?</label>
                </div>
                <div class='col-sm-6' style='text-align: left'>
                    <input type='checkbox' name='bingo' id='bingo' {{(old('bingo')?'checked':'')}}>
                    @include('modules.error-field', ['field' => 'bingo'])
                </div>
            </div>
            <div class='row' style='padding-bottom: 15px'>
                <div class='col-sm-6 formText' style='text-align: right'>
                    <label for='spelling'>Check word spelling?</label>
                </div>
                <div class='col-sm-6' style='text-align: left'>
                    <input type='checkbox' name='spelling' id='spelling' {{(old('spelling')?'checked':'')}}>
                    @include('modules.error-field', ['field' => 'spelling'])
                </div>
            </div>
            <div class='row' style='padding-top:25px; padding-bottom: 15px'>
                <div class='col-sm-12 formText centerContents'>
                    <input type='submit' value='Score the Word' class='btn'>&nbsp;&nbsp;
                </div>
            </div>
        </form>
        @include('modules.error-form')
    </div>
@endsection
