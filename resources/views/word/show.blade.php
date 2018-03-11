@extends('layouts.master')

@section('title')
    @if(isset($title))
        {{ $title }}
    @else
        CSCI E-15 | Project 3 - Word Scorer w/ Laravel
    @endif
@endsection

@push('head')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    <link href='/css/books/show.css' type='text/css' rel='stylesheet'>
@endpush

@section('content')
    <p>
        This will show the blank initial form on the page<br>
    </p>
@endsection
