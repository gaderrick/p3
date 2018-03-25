@extends('layouts.master')

@section('title')
    CSCI E-15 | Project 3 - Word Scorer w/ Laravel | Enter Word to Score
@endsection

@push('head')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    {{-- <link href='/css/books/show.css' type='text/css' rel='stylesheet'> --}}
@endpush

@section('content')
    {{--<div class='row'>--}}
        <div class='col-sm-12 mainArea'>
            <form method='GET' action='/score' name='main'>
                <div class='row' style='padding-top: 5px; padding-bottom: 15px'>
                    <div class='col-sm-6 formText' style='text-align: right'>
                        <label for='userWord'>Word to score:</label>
                    </div>
                    <div class='col-sm-6'>
                        <input type='text' name='userWord' style='width: 150px' id='userWord'
                               placeholder='(max of 7 letters)'
                               maxlength='7'
                               value=''>
                    </div>
                </div>
                <div class='row' style='padding-bottom: 15px'>
                    <div class='col-sm-6 formText' style='text-align: right'>
                        <label for='multiplier'>Score Multiplier:</label>
                    </div>

                    {{-- @TODO: Need to add selected tags to the below options --}}

                    <div class='col-sm-6'>
                        <select name='multiplier' id='multiplier'>
                            <option value='none'>
                                None
                            </option>
                            <option value='double'>
                                Double Word
                            </option>
                            <option value='triple'>
                                Triple Word
                            </option>
                        </select>
                    </div>
                </div>
                <div class='row' style='padding-bottom: 15px'>
                    <div class='col-sm-6 formText' style='text-align: right'>
                        <label for='bingo'>Bingo! (+50 pts)?</label>
                    </div>
                    <div class='col-sm-6'>
                        {{-- @TODO: Need to add checked tags to the below options --}}
                        <input type='checkbox' name='bingo' id='bingo'>
                    </div>
                </div>
                <div class='row' style='padding-bottom: 15px'>
                    <div class='col-sm-6 formText' style='text-align: right'>
                        <label for='spelling'>Check word spelling?</label>
                    </div>
                    <div class='col-sm-6'>
                        {{-- @TODO: Need to add checked tags to the below options --}}
                        <input type='checkbox' name='spelling' id='spelling' >
                    </div>
                </div>
                <div class='row' style='padding-top:25px; padding-bottom: 15px'>
                    <div class='col-sm-12 formText centerContents'>
                        <input type='submit' value='Score the Word' class='btn'>&nbsp;&nbsp;
                    </div>
                </div>
            </form>
        </div>
    {{--</div>--}}
@endsection
